<?
	header ('Content-Type: text/html; charset=utf-8');
	include('++');
?>
<!DOCTYPE html>

<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>BiNavigator-Doc.ru - Он-лайн сервис подготовки документов</title>
	<link href="favicon.ico" rel="shortcut icon" type="image/x-icon"/>

	<script>var SITE_TEMPLATE_PATH = '.'; // путь к корневой папке, без завершающего слэша</script>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>

	<!-- Bootstrap -->
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<?
		/*
	?>
		<link type="text/css" href="bootstrap/css/bootstrap-col24.css" rel="stylesheet"/>
	<?
		*/
	?>
	<!-- /Bootstrap -->

	<!-- JqueryUi -->
	<link type="text/css" href="jquery-ui/jquery-ui.min.css" rel="stylesheet"/>
	<script type="text/javascript" src="jquery-ui/jquery-ui.min.js"></script>
	<!-- /JqueryUi -->

	<link type="text/css" href="css/reset.css" rel="stylesheet"/>

	<!-- Fonts -->
	<link type="text/css" href="fonts/ubuntu-regular/stylesheet.css" rel="stylesheet"/>
	<link type="text/css" href="fonts/ubuntu-light/stylesheet.css" rel="stylesheet"/>
	<link type="text/css" href="fonts/ubuntu-medium/stylesheet.css" rel="stylesheet"/>
	<link type="text/css" href="fonts/ubuntu-bold/stylesheet.css" rel="stylesheet"/>
	<link type="text/css" href="fonts/ubuntu-italic/stylesheet.css" rel="stylesheet"/>
	<link type="text/css" href="fonts/ubuntu-light-italic/stylesheet.css" rel="stylesheet" />
	<?
		/*
	?>
	<link type="text/css" href="fonts/ubuntu-bold-italic/stylesheet.css" rel="stylesheet" />
	<link type="text/css" href="fonts/ubuntu-medium-italic/stylesheet.css" rel="stylesheet" />
	<?
		*/
	?>
	<!-- /Fonts -->

	<!-- Validation -->
	<link rel="stylesheet" href="validation/css/validationEngine.jquery.css" type="text/css"/>
	<link rel="stylesheet" href="validation/css/template.css" type="text/css"/>
	<script src="validation/js/languages/jquery.validationEngine-ru.js" type="text/javascript" charset="utf-8"></script>
	<script src="validation/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
	<!-- /Validation -->

	<?
		/*
	?>
	<!-- Sliders -->
	<script type="text/javascript" src="sliders/carouFredSel/js/jquery.ba-throttle-debounce.min.js"></script>
	<script type="text/javascript" src="sliders/carouFredSel/js/jquery.carouFredSel-6.2.1-packed.js"></script>
	<script type="text/javascript" src="sliders/carouFredSel/js/jquery.touchSwipe.min.js"></script>
	<script type="text/javascript" src="sliders/carouFredSel/js/jquery.transit.min.js"></script>
	<link rel="stylesheet" href="sliders/carouFredSel/css/styles.css" type="text/css"/>

	<link type="text/css" href="sliders/jcarousel/css/jcarousel.skin.css" rel="stylesheet"/>
	<script type="text/javascript" src="sliders/jcarousel/js/jquery.jcarousel.min.js"></script>
	<!-- /Sliders -->
	<?
		*/
	?>
	<?
		/*
	?>
	<!-- Highslide -->
	<link type="text/css" rel="stylesheet" href="highslide/css/jcarousel/jcarousel.css"/>
	<link type="text/css" rel="stylesheet" href="highslide/css/highslide.css"/>
	<script type="text/javascript" src="highslide/js/jquery.jcarousel.min.js"></script>
	<script type="text/javascript" src="highslide/js/jcarousel.js"></script>
	<script type="text/javascript" src="highslide/js/highslide.js"></script>
	<!-- /Highslide -->
	<?
		*/
	?>
	<!-- FormStyler -->
	<link type="text/css" href="form-styler/css/jquery.formstyler.css" rel="stylesheet"/>
	<script type="text/javascript" src="form-styler/js/jquery.formstyler.js"></script>
	<!-- /FormStyler -->

	<!-- FileUpload part 1 -->
	<link rel="stylesheet" href="jquery-file-upload/css/jquery.fileupload.css">
	<link rel="stylesheet" href="jquery-file-upload/css/jquery.fileupload-ui.css">
	<!-- /FileUpload part 1 -->

	<link type="text/css" href="css/index.css?t=<?= time () ?>" rel="stylesheet"/>
	<?
		/*
	?>
	<!--[if lt IE 9]>
	<link type="text/css" href="css/index-ie8.css?t=<?= time () ?>" rel="stylesheet"/>
	<![endif]-->
	<?
		*/
	?>

	<script type="text/javascript" src="js/index.js?t=<?= time () ?>"></script>

	<!-- Удалить меню html-ек -->
	<script type="text/javascript" src="js/del-menu.js"></script>
	<!--[if lt IE 9]>
	<style type="text/css">.del-menu {
		background: #000 !important;
	}

	.del-menu .current {
		background: orangered !important;
	}</style>
	<![endif]-->
	<!-- /Удалить меню html-ек -->
</head>