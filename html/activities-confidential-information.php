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

		<!-- AskExpertBlock -->
		<div class="ask-expert-block">
			<a href="#">Спросить у эксперта</a>
		</div>
		<!-- /AskExpertBlock -->

		<!-- BreadcrumbsBlock -->
		<ul class="breadcrumbs-block">
			<li><a href="#">Рабочий стол</a></li>
			<li><a href="#">Мероприятия</a></li>
			<li><a href="#">Стартовые</a></li>
			<li><a href="#">Сведения конфиденциального характера</a></li>
		</ul>
		<!-- /BreadcrumbsBlock -->

		<div class="clearfix"></div>
		<div class="row">

			<!-- LeftColumn -->
			<div class="left-column col-xs-3">

				<div class="caption-block">Разделы</div>

				<!-- LeftMenu -->
				<ul class="left-menu">
					<li class="active"><a href="#">Сведения конфиденциального характера</a></li>
					<li><a href="#">Размещение сотрудников</a></li>
					<li><a href="#">Информация о серверах</a></li>
					<li><a href="#">Информация о рабочих местах</a></li>
					<li><a href="#">Информационные системы</a></li>
					<li><a href="#">Материальные носители</a></li>
					<li><a href="#">Резервное копирование</a></li>
					<li><a href="#">Контрольные даты</a></li>
					<li><a href="#">Средства криптографической защиты информации</a></li>
				</ul>
				<!-- /LeftMenu -->

				<!-- LeftAdditionalBlock -->
				<?
					// include ('inc/__left_add_block.php');
				?>
				<!-- /LeftAdditionalBlock -->

			</div>
			<!-- /LeftColumn -->

			<!-- CenterColumn -->
			<div class="center-column col-xs-6">

				<!-- Caption -->
				<h1 class="caption-block">Сведения конфиденциального характера</h1>
				<!-- /Caption -->

				<!-- Body -->
				<div class="body">

					В данном разделе необходимо указать сведения, установленные в вашей организации, как конфиденциальные.
					<br/><br/><br/>

					<form name="person-form" class="form-line-list" action="#" method="POST" enctype="multipart/form-data">

						<!--
						<br/>
						<span class="small-text"><span class="red-text">*</span> Обязательно к заполнению</span>
						 -->

						<div class="clearfix"></div>
						<br/><br/>

						<div class="center-text"><input type="submit" value="Добавить"></div>
						<div class="clearfix"></div>
						<br/><br/><br/>
						<a href="#" class="button button-prev">Назад</a>
						<a href="#" class="button button-next pull-right">Далее</a>

					</form>

				</div>
				<!-- /Body -->

			</div>
			<!-- CenterColumn -->

			<!-- RightColumn -->
			<div class="right-column col-xs-3">

				<!-- DocumentListBlock -->
				<?
					include ('inc/__right_document_list_block.php')
				?>
				<!-- /DocumentListBlock -->

			</div>
			<!-- /RightColumn -->

		</div>
	</div>
</div>
<!-- /MiddleBlock -->

<?
	include ('inc/_footer.php');
	include ('inc/_windows.php');
?>

</body>
</html>