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
			<li><a href="#">Организация</a></li>
			<li><a href="#">Общие сведения</a></li>
		</ul>
		<!-- /BreadcrumbsBlock -->

		<div class="clearfix"></div>
		<div class="row">

			<!-- LeftColumn -->
			<div class="left-column col-xs-4">

				<div class="caption-block">Общие сведения</div>

				<!-- LeftMenu -->
				<ul class="left-menu">
					<li class="active"><a href="#">Об организации</a></li>
					<li><a href="#">Структура подразделений</a></li>
					<li><a href="#">Список должностей</a></li>
					<li><a href="#">Список сотрудников</a></li>
					<li><a href="#">Список помещений</a></li>
					<li><a href="#">О руководителе</a></li>
				</ul>
				<!-- /LeftMenu -->

				<!-- LeftAdditionalBlock -->
				<?
					include ('inc/__left_add_block.php');
				?>
				<!-- /LeftAdditionalBlock -->

			</div>
			<!-- /LeftColumn -->

			<!-- RightColumn -->
			<div class="right-column col-xs-8">

				<!-- Caption -->
				<h1 class="caption-block">Об организации</h1>
				<!-- /Caption -->

				<!-- Body -->
				<div class="body">

					<form id="fileupload" class="fileupload-png" data-max-number-of-files="1" action="#t=<?= time () ?>" method="POST" enctype="multipart/form-data">

						Организационно-правовая форма: <span class="red-text">*</span> <br/>

						<div class="row">
							<div class="col-xs-11">
								<input type="text" name="base" value="" v="Общество с ограниченной ответственностью" class="validate[required]" data-prompt-position="bottomLeft:140">

								<div class="pull-left"><input type="checkbox" name="field[]" value="Y" id="field_1" class="to-link-case-forms"><label for="field_1" class="micro-text">Не склонять</label></div>
								<div class="pull-right">
									<a href="#" class="micro-text red-text link-case-forms" data-toggle="modal" data-target="#edit-case-modal">Редактировать падежные формы</a>
								</div>
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>
						<br/>

						Организационно-правовая форма сокращенно: <span class="red-text">*</span> <br/>

						<div class="row">
							<div class="col-xs-11">
								<input type="text" name="base" value="Общество с ограниченной ответственностью" class="validate[required]" data-prompt-position="bottomLeft:140">

								<div class="pull-left"><input type="checkbox" name="field[]" value="Y" id="field_2" class="to-link-case-forms"><label for="field_2" class="micro-text">Не склонять</label></div>
								<div class="pull-right">
									<a href="#" class="micro-text red-text link-case-forms" data-toggle="modal" data-target="#edit-case-modal">Редактировать падежные формы</a>
								</div>
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>
						<br/>

						Полное наименование организации: <span class="red-text">*</span> <br/>

						<div class="row">
							<div class="col-xs-11">
								<input type="text" name="base" value="" class="validate[required]" data-prompt-position="bottomLeft:140">

								<div class="pull-left"><input type="checkbox" name="field[]" value="Y" id="field_3" class="to-link-case-forms"><label for="field_3" class="micro-text">Не склонять</label></div>
								<div class="pull-right">
									<a href="#" class="micro-text red-text link-case-forms" data-toggle="modal" data-target="#edit-case-modal">Редактировать падежные формы</a>
								</div>
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>
						<br/>

						Сокращенное наименование организации: <span class="red-text">*</span> <br/>

						<div class="row">
							<div class="col-xs-11">
								<input type="text" name="base" value="" class="validate[required]" data-prompt-position="bottomLeft:140">

								<div class="pull-left"><input type="checkbox" name="field[]" value="Y" id="field_4" class="to-link-case-forms"><label for="field_4" class="micro-text">Не склонять</label></div>
								<div class="pull-right">
									<a href="#" class="micro-text red-text link-case-forms" data-toggle="modal" data-target="#edit-case-modal">Редактировать падежные формы</a>
								</div>
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>
						<br/>

						Индивидуальный номер налогоплательщика: <span class="red-text">*</span> <br/>

						<div class="row">
							<div class="col-xs-11">
								<input type="text" name="base" value="" class="validate[required]">
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>
						<br/>

						Фактический адрес: <span class="red-text">*</span> <br/>

						<div class="row">
							<div class="col-xs-11">
								<input type="text" name="base" value="" class="validate[required]">
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>
						<br/>

						Юридический адрес: <span class="red-text">*</span> <br/>

						<div class="row">
							<div class="col-xs-11">
								<input type="text" name="base" value="" class="validate[required]">
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>
						<br/>

						Дата регистрации юридического лица: <span class="red-text">*</span> <br/>

						<div class="row">
							<div class="col-xs-12">
								<input type="text" name="registration-date" value="" class="datepicker validate[required]">
							</div>
						</div>
						<br/>

						Номер Уведомления об обработке персональных данных: <br/>

						<div class="row">
							<div class="col-xs-11">
								<input type="text" name="base" value="">
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>
						<br/>

						Тип распорядительного документа: <br/>

						<div class="row">
							<div class="col-xs-11">
								<select name="post">
									<option>Выберите тип распорядительного документа</option>
									<option value="1">Тип распорядительного документа 1</option>
									<option value="2">Тип документа 2</option>
									<option value="3">Тип распорядительного документа 3</option>
								</select>
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>
						<br/>

						Дата внесения оператора в реестр: <br/>

						<div class="row">
							<div class="col-xs-12">
								<input type="text" name="registry-date" value="" class="datepicker">
							</div>
						</div>
						<br/>

						Герб (логотип) организации: <br/>

						<div class="fileupload-buttonbar fileupload-png">
							<div class="row">
								<div class="col-xs-6">
									<span class="small-text">Выберите файл в формате PNG размером <br/>до 1 МБ для загрузки</span> <br/>
								</div>
								<div class="col-xs-5">

									<!-- The fileinput-button span is used to style the file input field as button -->
									<span class="button button-green button-small fileinput-button" style="margin-top: 10px;">
										<i class="glyphicon glyphicon-plus"></i>
										<span>Добавить файл...</span>
										<input type="file" name="files[]" multiple>
									</span>

								</div>
								<div class="col-xs-1">
									<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12">

									<!-- The table listing the files available for upload/download -->
									<table role="presentation" class="table table-striped">
										<tbody class="files"></tbody>
									</table>

								</div>
							</div>
						</div>

						<br/>
						<span class="small-text"><span class="red-text">*</span> Обязательно к заполнению</span>

						<div class="clearfix"></div>
						<br/><br/>

						<div class="center-text"><input type="submit" value="Сохранить изменения"></div>
						<div class="clearfix"></div>
						<br/><br/><br/>
						<a href="#" class="button button-prev">Назад</a>
						<a href="#" class="button button-next pull-right">Далее</a>

					</form>

				</div>
				<!-- /Body -->

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