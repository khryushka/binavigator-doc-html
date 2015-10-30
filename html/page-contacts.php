<?
	include ('inc/_head.php');
?>
<body>

<?
	include ('inc/_header.php');
?>

<!-- MiddleBlock -->
<div class="middle-block">
	<div class="wrapper">

		<!-- BreadcrumbsBlock -->
		<ul class="breadcrumbs-block">
			<li><a href="#">Главная</a></li>
			<li><a href="#">Контакты</a></li>
		</ul>
		<!-- /BreadcrumbsBlock -->

		<div class="clearfix"></div>

		<!-- CenterColumn -->
		<div class="center-column row">
			<div class="col-xs-12">

				<!-- Caption -->
				<h1 class="caption-block">Контакты</h1>
				<!-- /Caption -->

				<!-- Body -->
				<div class="body">

					<div class="caption-block">Системный интегратор «Бизнес Навигатор»</div>

					<br/>

					<div id="ymaps-map-id_1349206844953585018328" style="width: 100%; height: 450px;">
					</div>
					<script type="text/javascript">function fid_1349206844953585018328(ymaps) {
							var map = new ymaps.Map("ymaps-map-id_1349206844953585018328", {center: [50.18443749999999, 53.2134], zoom: 16, type: "yandex#map"});
							map.controls.add("zoomControl").add("mapTools").add(new ymaps.control.TypeSelector(["yandex#map", "yandex#satellite", "yandex#publicMap"]));
							var placemark = new ymaps.Placemark([50.18443749999999, 53.2134], {balloonContent: '<b>Системный интегратор «Бизнес Навигатор»<\/b><br \/><br \/>Адрес: Самарская обл, г. Самара<br \/>проспект Карла Маркса, дом 192, офис 719<br \/><br \/>Телефон: <a href="tel:+78462121220" class="u">+8 (846) 212 12 20<\/a><br \/><br \/>E-mail: <a href="mailto:security@binavigator.ru">security@binavigator.ru<\/a>'}, {preset: "twirl#blueDotIcon"});
							map.geoObjects.add(placemark);
							placemark.balloon.open();
						}
					</script>
					<script type="text/javascript" src="http://api-maps.yandex.ru/2.0/?coordorder=longlat&load=package.full&wizard=constructor&lang=ru-RU&onload=fid_1349206844953585018328"></script>

					<br/><br/>

					<div class="row contacts-block">

						<div class="col-xs-4 points-block">
							<div class="caption-block phone-block">Телефон</div>
							<div><a href="tel:+78462121220" class="u"><i>+8 (846) 212 12 20</i></a></div>
						</div>

						<div class="col-xs-4 points-block">
							<div class="row">
								<div class="caption-block address-block">Адрес местонахождения</div>
								<div><i>443080. Самарская обл, г. Самара <br/>проспект Карла Маркса, дом 192, офис 719</i></div>
							</div>
						</div>

						<div class="col-xs-4 points-block">
							<div class="caption-block email-block">E-mail</div>
							<div><a href="mailto:security@binavigator.ru"><i>security@binavigator.ru</i></a></div>
						</div>

					</div>

					<br/><br/>

					<!-- BigButtonBlock -->
					<div class="full-width-border-block center-text">
						<br/>

						<div class="caption-big-bold-block">Остались вопросы ?</div>

						<br/><br/>

						<a href="#" class="button button-big" data-toggle="modal" data-target="#feedback-modal">Задать вопрос</a>

						<br/>
					</div>
					<!-- /BigButtonBlock -->

				</div>
				<!-- /Body -->

			</div>

		</div>
		<!-- CenterColumn -->

	</div>
</div>
<!-- /MiddleBlock -->

<?
	include ('inc/_footer.php');
	include ('inc/_windows.php');
?>

</body>
</html>