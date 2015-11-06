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
			<li><a href="#">Технические решения</a></li>
			<li><a href="#">Формирование технического решения</a></li>
		</ul>
		<!-- /BreadcrumbsBlock -->

		<div class="clearfix"></div>
		<div class="row">

			<!-- LeftColumn -->
			<div class="left-column col-xs-3">

				<div class="caption-block">Разделы</div>

				<!-- LeftMenu -->
				<ul class="left-menu">
					<li><a href="#">Архив техрешений</a></li>
					<li class="active"><a href="#">Формирование технического решения</a></li>
					<li><a href="#">Текущее техрешение</a></li>
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
				<h1 class="caption-block">Формирование технического решения</h1>
				<!-- /Caption -->

				<!-- Body -->
				<div class="body">

					Подбор технического решения - процедура очень сложная и. во многом, творческая. А потому предлагаемое техническое решение, безусловно, является подходящим и применимым к вашей организации, но оно может быть не самым оптимальным из возможных вариантов.
					<br/><br/>
					Если Вам необходима дополнительная консультация по подбору более оптимального технического решения обратитесь, пожалуйста, к Вашему партнеру.

					<br/><br/><br/>

					Использование терминального доступа: <br/>
					<div class="row">
						<div class="col-xs-11">
							<select name="post" multiple size="5">
								<option>Выберите ИСПДн с терминальным доступом</option>
								<option value="1">ИСПДн 1</option>
								<option value="2">ИСПДн 2</option>
								<option value="3">ИСПДн 3</option>
								<option value="4">ИСПДн 4</option>
								<option value="5">ИСПДн 5</option>
							</select>
						</div>
						<div class="col-xs-1">
							<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
						</div>
					</div>
					<small>Отметьте, пожалуйста, при работе в каких ИСПДн используется терминальный доступ</small>

					<br/><br/><br/>

					<form name="person-form" class="form-line-list" action="#" method="POST" enctype="multipart/form-data">

						Рабочее место ответственного: <br/>

						<div class="row">
							<div class="col-xs-11">
								<select name="post">
									<option>Выберите рабочее место</option>
									<option value="1">Рабочее место 1</option>
									<option value="2">Рабочее место 2</option>
									<option value="3">Рабочее место 3</option>
								</select>
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>

						<br/>

						Определение потребности в шифрованных каналах связи: <br/>

						<div class="row">
							<div class="col-xs-1">
								<input type="checkbox" name="field[]" value="Y" id="field_1">
							</div>
							<div class="col-xs-10">
								<label for="field_1">В локальной сети имеются другие ПК, помимо защищенных</label>
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-1">
								<input type="checkbox" name="field[]" value="Y" id="field_2">
							</div>
							<div class="col-xs-10">
								<label for="field_2">Линии связи выходят за пределы контролируемой</label>
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

						<div class="center-text"><input type="submit" value="Сохранить"></div>
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