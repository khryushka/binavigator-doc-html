<?
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
?>