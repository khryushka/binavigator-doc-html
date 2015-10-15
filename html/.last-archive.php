<?
	function arprint($obj = null){
		echo "
<pre>";
		print_r($obj);
		echo "</pre>";
	}

	$arFileList = Array();
	foreach (glob("html*.zip") as $filename) {
		$arFileList[] = Array(
			'dt' => filemtime($filename),
			'size' => filesize($filename),
			'name' => $filename,
		);
	}
	if ($arFileList) {
		rsort($arFileList);
		$ar = current($arFileList);
		$time = gmdate("D, d M Y H:i:s", $ar['dt']) . " GMT";
		$size = $ar['size'];
		$name = $ar['name'];
		$md5 = md5_file($filename);
		header("http/1.1 200 Ok");
		header("Date: $time"); // Текущая дата формирования документа
		header("Last-Modified: $time"); // Дата модификации документа
		//header("Expires: Mon, 24 Mar 2014 11:29:04 GMT"); // Дата предположительного изменения документа
		header("Content-Type: application/zip; name=$name");
		header("Content-Disposition: inline; filename=$name");
		header("Content-MD5: $md5");
		header("Content-Length: $size");
		echo file_get_contents(dirname(__FILE__) . '/' . $name);
	}
	else {
		arprint('archive missing');
	}
?>