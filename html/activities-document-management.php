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
			<li><a href="#">Оперативные</a></li>
			<li><a href="#">Документооборот</a></li>
		</ul>
		<!-- /BreadcrumbsBlock -->

		<div class="clearfix"></div>
		<div class="row">

			<!-- LeftColumn -->
			<div class="left-column col-xs-3">

				<div class="caption-block">Разделы</div>

				<!-- LeftMenu -->
				<ul class="left-menu">
					<li class="active"><a href="#">Документооборот</a></li>
					<li><a href="#">Мероприятия по СКЗИ</a></li>
					<li><a href="#">Структурные мероприятия</a></li>
					<li><a href="#">Кадровые мероприятия</a></li>
					<li><a href="#">Повторное формирование пакета документов</a></li>
					<li><a href="#">Ведение журналов</a></li>
					<li><a href="#">Акты</a></li>
					<li><a href="#">Дополнительные документы</a></li>
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
				<h1 class="caption-block">Документооборот</h1>
				<!-- /Caption -->

				<!-- Body -->
				<div class="body">

					Раздел позволяет признать локальный нормативный
					<br/><br/><br/>

					<form name="person-form" class="form-line-list" action="#" method="POST" enctype="multipart/form-data">

						Приказы, которые необходимо признать утратившими силу: <br/>

						<div class="row">
							<div class="col-xs-11">
								<select name="post" multiple size="5">
									<option>Выберите утратившие силу приказы</option>
									<option value="1">Приказ 1</option>
									<option value="2">Приказ 2</option>
									<option value="3">Приказ 3</option>
									<option value="4">Приказ 4</option>
									<option value="5">Приказ 5</option>
								</select>
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>

						Основание для аннулирования приказов: <br/>

						<div class="row">
							<div class="col-xs-11">
								<input type="text" name="base" value="">
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>

						<!--
						<br/>
						<span class="small-text"><span class="red-text">*</span> Обязательно к заполнению</span>
						 -->

						<div class="clearfix"></div>
						<br/><br/>

						<div class="center-text"><input type="submit" value="Утвердить"></div>
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