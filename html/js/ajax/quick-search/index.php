<?
	/**
	 * Результаты быстрого поиска
	 * @author
	 * @created   2015.03.08 15:42
	 * @copyright 2015
	 **/
	$q = $_GET["term"];

	$onlyAuthor = ($_GET["only-author"] ? true : false);

	$result = array();
	if (!$q)
	{
		return;
	}

	/**
	 * вывод объекта на печать
	 **/
	if (!function_exists ('arprint'))
	{
		function arprint ($obj, $die = false)
		{
			echo "
	<pre style='text-align: left; font-size: 12px;'>";
			print_r ($obj);
			echo "</pre>";
		}

		if ($die)
		{
			die();
		}
	}


	$arList = Array();

	if ($onlyAuthor) {
		$arList[] = Array(
			'className' => 'author',
			'category' => 'Автор',
			"id" => 1,
			"label" => 'Такой-то автор: ' . $q . '...',
			"value" => 'Такой-то автор: ' . $q . '...',
		);
		$arList[] = Array(
			'className' => 'author',
			'category' => 'Автор',
			"id" => 2,
			"label" => 'Такой-то автор: ' . $q . '...',
			"value" => 'Такой-то автор: ' . $q . '...',
		);
	}
	else {

		// getData
		$dataFile = 'data/rocid.xml';
		$xml = simplexml_load_string (file_get_contents ($dataFile));

		function getCityList ($cityName, $xml)
		{
			$arList = Array();
			$count = 0;
			foreach ($xml->city as $oCity)
			{
				$arCity = (array) $oCity;

				if (preg_match ("/" . $cityName . "/iu", $arCity['name']))
				{
					switch ($count) {
						case 0:
							$class = 'place';
							break;
						case 1:
							$class = 'hotel';
							break;
						default:
							$class = current (array_slice (Array('place', 'hotel'), rand (0, 1), 1));
					}

					$arCountry = getCountryById ($arCity['country_id'], $xml);
					$arRegion = getRegionById ($arCity['region_id'], $xml);

					$prefixName = ($arCountry ? $arCountry['name'] . ', ' : '') . ($arRegion ? $arRegion['name'] . ', ' : '');
					$name = $prefixName . $arCity['name'];

					// TODO: закомментировано, т.к. в выпадающем списке отображается сам тег
					// $nameForList = $prefixName . preg_replace ("/($cityName)/iu", "<strong>\${1}</strong>", $arCity['name']);
					$nameForList = $prefixName . $arCity['name'];

					$str = ($class == 'hotel' ? 'Фильм из цикла "Путешествие по городу". ' . $arCity['name'] : 'Атлас "' . $nameForList . '"');

					$arList[] = Array(
						'id' => '?id=' . $arCity['city_id'],
						'name' => $str,
						'value' => $str,
						'className' => $class,
						'category' => ($class == 'hotel' ? 'Мультимедиа' : 'Книги'),
					);
					$count++;
				}
			}

			return $arList;
		}

		function getCountryById ($id, $xml)
		{
			foreach ($xml->country as $oCountry)
			{
				$arCountry = (array) $oCountry;
				if ($arCountry['country_id'] == $id)
				{
					return $arCountry;
				}
			}
		}

		function getRegionById ($id, $xml)
		{
			foreach ($xml->region as $oReqion)
			{
				$arRegion = (array) $oReqion;
				if ($arRegion['region_id'] == $id)
				{
					return $arRegion;
				}
			}
		}

		$arList = getCityList ($q, $xml);
		// /getData

	}

	if ($arList)
	{
		$max = 10;
		$count = 0;
		foreach ($arList as $ar)
		{
			array_push ($result, array(
				"className" => $ar['className'],
				'category' => $ar['category'],
				"id" => $ar['id'],
				"label" => $ar['name'],
				"value" => $ar['value'],
			));

			$count++;
			if ($count >= $max)
			{
				break;
			}
		}
		rsort ($result);
	}

	function array_to_json ($array)
	{

		if (!is_array ($array))
		{
			return false;
		}

		$associative = count (array_diff (array_keys ($array), array_keys (array_keys ($array))));
		if ($associative)
		{

			$construct = array();
			foreach ($array as $key => $value)
			{

				// We first copy each key/value pair into a staging array,
				// formatting each key and value properly as we go.

				// Format the key:
				if (is_numeric ($key))
				{
					$key = "key_$key";
				}
				$key = "\"" . addslashes ($key) . "\"";

				// Format the value:
				if (is_array ($value))
				{
					$value = array_to_json ($value);
				} else if (!is_numeric ($value) || is_string ($value))
				{
					$value = "\"" . addslashes ($value) . "\"";
				}

				// Add to staging array:
				$construct[] = "$key: $value";
			}

			// Then we collapse the staging array into the JSON form:
			$result = "{ " . implode (", ", $construct) . " }";

		} else
		{ // If the array is a vector (not associative):

			$construct = array();
			foreach ($array as $value)
			{

				// Format the value:
				if (is_array ($value))
				{
					$value = array_to_json ($value);
				} else if (!is_numeric ($value) || is_string ($value))
				{
					$value = "'" . addslashes ($value) . "'";
				}

				// Add to staging array:
				$construct[] = $value;
			}

			// Then we collapse the staging array into the JSON form:
			$result = "[ " . implode (", ", $construct) . " ]";
		}

		return $result;
	}

	/*
		$result = array();
		foreach ($items as $key=>$value) {
			if (strpos(strtolower($key), $q) !== false) {
				array_push($result, array("id"=>$value, "label"=>$key, "value" => strip_tags($key)));
			}
			if (count($result) > 11)
				break;
		}
	*/
	echo array_to_json ($result);

?>