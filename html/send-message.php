<?
	// адреса получателей писем с сайта через запятую
	$managerEMail = 'master@kikimatuki.com';
	$displayedEMail = 'BiNavigator-Doc.ru';

	// определяем referer
	$referer = $_REQUEST['referer'];

	// ищем в referer адреса поисковиков и присваиваем переменным
	// $search и $crawler соответствующие значения
	if (stristr($referer, 'yandex.ru')) { $search = 'text='; $crawler = 'Yandex'; }
	if (stristr($referer, 'rambler.ru')) { $search = 'words='; $crawler = 'Rambler'; }
	if (stristr($referer, 'google.ru')) { $search = 'q='; $crawler = 'Google'; }
	if (stristr($referer, 'google.com')) { $search = 'q='; $crawler = 'Google'; }
	if (stristr($referer, 'mail.ru')) { $search = 'q='; $crawler = 'Mail.Ru'; }
	if (stristr($referer, 'bing.com')) { $search = 'q='; $crawler = 'Bing'; }
	if (stristr($referer, 'qip.ru')) { $search = 'query='; $crawler = 'QIP'; }
	
	// если посетитель пришел с поисковика то выполняем следующий код
	if (isset($crawler)) {
		// здесь мы приводим referer в понятный для человека вид
		$phrase = urldecode($referer);
	
		// ищем ключевое слово в referer
		preg_match("/" . $search . '([^&]*)' . "/", $phrase.'&', $phrase2);
		$phrase = $phrase2[1];
	}
 


	$name = trim($_REQUEST['name']); if (preg_match("/^имя$/iu", $name)) {$name = '';}
	$phone = trim($_REQUEST['phone']);
	preg_match_all("/[0-9]/iu", $phone, $matches);
	$phone = implode('', $matches[0]); if (preg_match("/^телефон$/iu", $phone)) {$phone = '';}
	if (!$phone) {
		$phone = trim($_REQUEST['code']) . trim($_REQUEST['number']);
		preg_match_all("/[0-9]/iu", $phone, $matches);
		$phone = implode('', $matches[0]);
	}
	$email = trim($_REQUEST['email']); if (preg_match("/^e-mail/iu", $email)) {$email = '';}
	$message = trim($_REQUEST['message']);
	$formName = trim($_REQUEST['formName']);
	$win = trim($_REQUEST['win']);
	$winName = trim($_REQUEST['winName']);

	switch ($win) {
		case 'win': 
			break;
		default: 
			$resultCaption = $winName;
			$resultBody = 'В самое ближайшее время, наш специалист<br />обработает вашу заявку и свяжется с вами.';
	}

	if ($winName){
		$body = "
			<style type=\"text/css\">
				BODY, TD, DIV, P, A, INPUT, SELECT, H1, H2, H3, H4, H5, H6{font-family: 'Verdana', 'Arial', 'Tahoma', 'Times New Roman';}
				BODY, TD, DIV, P, A, INPUT, SELECT{color: #000000; font-size: 12px;}
			</style>
			<div>Информация с сайта <a href=\"http://" . $_SERVER["HTTP_HOST"] . "\">" . $_SERVER["HTTP_HOST"] . "</a>:</div>
			<div>&nbsp;</div>
			<div>Запрос с формы</div>
			<div><b>$formName</b></div>
			<div>&nbsp;</div>
			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
			";
		if ($name){
			$body .= "
				<tr valign=\"top\"><td>Имя:</td><td>&nbsp;&nbsp;</td><td>" . $name . "</td></tr><tr><td>&nbsp;</td></tr>
			";
		}
		if ($phone){
			$body .= "
				<tr valign=\"top\"><td>Телефон:</td><td>&nbsp;&nbsp;</td><td>" . $phone . "</td></tr><tr><td>&nbsp;</td></tr>
			";
		}
		if ($email){
			$body .= "
				<tr valign=\"top\"><td>E-mail:</td><td>&nbsp;&nbsp;</td><td>" . $email . "</td></tr><tr><td>&nbsp;</td></tr>
			";
		}
		if ($message){
			$body .= "
				<tr valign=\"top\"><td>Вопрос:</td><td>&nbsp;&nbsp;</td><td>" . $message . "</td></tr><tr><td>&nbsp;</td></tr>
			";
		}
		if ($crawler){
			$body .= "
				<tr valign=\"top\"><td>Поисковый робот:</td><td>&nbsp;&nbsp;</td><td>" . $crawler . "</td></tr><tr><td>&nbsp;</td></tr>
			";
		}
		if ($phrase){
			$body .= "
				<tr valign=\"top\"><td>Поисковая фраза:</td><td>&nbsp;&nbsp;</td><td>" . $phrase . "</td></tr><tr><td>&nbsp;</td></tr>
			";
		}
		$body .= "
			<tr valign=\"top\"><td>Отправлено со страницы:</td><td>&nbsp;&nbsp;</td><td>" . $_SERVER['HTTP_REFERER'] . "</td></tr><tr><td>&nbsp;</td></tr>
			<tr valign=\"top\"><td>IP:</td><td>&nbsp;&nbsp;</td><td>" . $_SERVER['REMOTE_ADDR'] . "</td></tr><tr><td>&nbsp;</td></tr>
		";
		$body .= "
			</table>
		";
	
		$str = "Content-Type: text/html; charset=UTF-8\n";
		$str.= "From:\"$displayedEMail\"<message@".preg_replace("/^(www\.)(.+)$/", "\${2}", $_SERVER["HTTP_HOST"]).">\n";
		$str.= "Content-Transfer-Encoding: 8bit";
		$subject = 'New Message From Site' . ($formName ? ' - ' . $formName : '');

		if(mail($managerEMail, $subject, $body, $str)) {
?>
			<div class="result-caption"><?= $resultCaption ?></div>
			<div class="result-body">
				<?= $resultBody ?>
				<br /><br /><br /><div class="center-text"><a href="javascript: return false" title="Закрыть" class="button-submit" onclick="$('.mask').hide(0); return false;">Ok</a></div>
			</div>
<?
			return;
		}
	}
?>
			<div class="result-caption"><?= $resultCaption ?></div>
			<div class="result-body">Отправка письма невозможна<br />Повторите отправку данных</div>
			<br /><div class="center-text"><a href="javascript: return false" title="Закрыть" class="button-submit" onclick="$('.mask').hide(0); return false;">Ok</a></div><?
