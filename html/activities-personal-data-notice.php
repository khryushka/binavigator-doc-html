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
					<li class="active"><a href="#">Уведомление об обработке (о намерении осуществлять обработку) персональных данных</a></li>
					<li><a href="#">Информационное письмо о внесении изменений в сведения в реестре операторов, осуществляющих обработку персональных данных</a></li>
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
				<h1 class="caption-block">Уведомление об обработке (о намерении осуществлять обработку) персональных данных</h1>
				<!-- /Caption -->

				<!-- Body -->
				<div class="body">


					В данном разделе необходимо указать дополнительные сведения, необходимые для уведомления, а также скорректировать уже имеющиеся. <br/>
					<br/>
					Также можно посмотреть статус отправленной заявки.

					<br/><br/><br/>

					<form name="person-form" class="form-line-list" action="#" method="POST" enctype="multipart/form-data">

						Наименование территориального органа Роскомнадзора. Управление Федеральной службы по надзору в сфере связи, информационных технологий и массовых коммуникаций по: <br/>

						<div class="row">
							<div class="col-xs-11">
								<select name="post">
									<option>Выберите</option>
									<option value="1">Значение 1</option>
									<option value="2">Значение 2</option>
									<option value="3">Значение 3</option>
								</select>
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>

						<br/>

						Тип оператора: <br/>

						<div class="row">
							<div class="col-xs-11">
								<select name="post">
									<option>Выберите</option>
									<option value="1">Значение 1</option>
									<option value="2">Значение 2</option>
									<option value="3">Значение 3</option>
								</select>
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>

						<br/>

						Полное наименование оператора: <br/>

						<div class="row">
							<div class="col-xs-11">
								<select name="post">
									<option>Выберите</option>
									<option value="1">Значение 1</option>
									<option value="2">Значение 2</option>
									<option value="3">Значение 3</option>
								</select>
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>

						<br/>

						Краткое наименование оператора: <br/>

						<div class="row">
							<div class="col-xs-11">
								<select name="post">
									<option>Выберите</option>
									<option value="1">Значение 1</option>
									<option value="2">Значение 2</option>
									<option value="3">Значение 3</option>
								</select>
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>

						Адрес оператора: <br/>

						<div class="row">
							<div class="col-xs-11">
								<textarea name="textarea"></textarea>
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>

						<br/>

						Почтовый адрес: <br/>

						<div class="row">
							<div class="col-xs-11">
								<textarea name="textarea"></textarea>
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>

						<br/>

						Регионы: <br/>

						<div class="row">
							<div class="col-xs-11">
								<select name="post">
									<option>Выберите</option>
									<option value="1">Значение 1</option>
									<option value="2">Значение 2</option>
									<option value="3">Значение 3</option>
								</select>
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>

						<br/><br/><br/>

						<div class="medium-text">Данные, необходимые для формирования уведомления ИНН:</div>

						<br/><br/>

						ОГРН (ОГРНИП): <br/>

						<div class="row">
							<div class="col-xs-11">
								<input type="text" name="base" value="">
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>

						<br/>

						ОКВЭД: <br/>

						<div class="row">
							<div class="col-xs-11">
								<input type="text" name="base" value="">
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>

						<br/>

						ОКПО: <br/>

						<div class="row">
							<div class="col-xs-11">
								<input type="text" name="base" value="">
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>

						<br/>

						ОКФС: <br/>

						<div class="row">
							<div class="col-xs-11">
								<input type="text" name="base" value="">
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>

						<br/>

						ОКОГУ: <br/>

						<div class="row">
							<div class="col-xs-11">
								<input type="text" name="base" value="">
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>

						<br/>

						ОКОПФ: <br/>

						<div class="row">
							<div class="col-xs-11">
								<input type="text" name="base" value="">
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>

						<br/>

						Правовое основание обработки персональных данных. <br/>
						Руководствуясь: <br/>

						<div class="row">
							<div class="col-xs-11">
								<textarea name="textarea"></textarea>
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>

						<br/>

						Цель обработки персональных данных. <br/>
						С целью: <br/>

						<div class="row">
							<div class="col-xs-11">
								<textarea name="textarea"></textarea>
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>

						<br/>

						Категории персональных данных. <br/>
						Осуществляет обработку: <br/>

						<div class="row">
							<div class="col-xs-11">
								<textarea name="textarea"></textarea>
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>

						<br/>

						Категории субъектов, персональные данные которых обрабатываются. <br/>
						Принадлежащих: <br/>

						<div class="row">
							<div class="col-xs-11">
								<textarea name="textarea"></textarea>
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>

						<br/>

						Перечень действий с персональными данными общее описание используемых оператором способов обработки персональных данных. <br/>
						Обработка вышеуказанных персональных данных будет осуществляться путем: <br/>

						<div class="row">
							<div class="col-xs-11">
								<textarea name="textarea"></textarea>
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>

						<br/>

						<div class="row">
							<div class="col-xs-1">
								<input type="radio" name="radio-1" value="Y" id="field_1">
							</div>
							<div class="col-xs-11">
								<label for="field_1">автоматизированная</label>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-1">
								<input type="radio" name="radio-1" value="Y" id="field_2">
							</div>
							<div class="col-xs-11">
								<label for="field_2">неавтоматизированная</label>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-1">
								<input type="radio" name="radio-1" value="Y" id="field_3">
							</div>
							<div class="col-xs-11">
								<label for="field_3">смешанная</label>
							</div>
						</div>

						<br/>
						<br/>

						<div class="row">
							<div class="col-xs-1">
								<input type="radio" name="radio-2" value="Y" id="field_4">
							</div>
							<div class="col-xs-11">
								<label for="field_4">с передачей по внутренней сети юридического лица</label>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-1">
								<input type="radio" name="radio-2" value="Y" id="field_5">
							</div>
							<div class="col-xs-11">
								<label for="field_5">без передачи по внутренней сети юридического лица</label>
							</div>
						</div>

						<br/>
						<br/>

						<div class="row">
							<div class="col-xs-1">
								<input type="radio" name="radio-3" value="Y" id="field_6">
							</div>
							<div class="col-xs-11">
								<label for="field_6">с передачей по сети Интернет</label>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-1">
								<input type="radio" name="radio-3" value="Y" id="field_7">
							</div>
							<div class="col-xs-11">
								<label for="field_7">без передачи по сети Интернет</label>
							</div>
						</div>

						<br/>
						<br/>

						<div class="row">
							<div class="col-xs-1">
								<input type="checkbox" name="field[]" value="Y" id="field_8">
							</div>
							<div class="col-xs-10">
								<label for="field_8">Осуществление трансграничной передачи</label>
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>

						<br/>


						Описание мер, предусмотренных статьями <br/>
						18.1. и 19 Федерального закона <br/>
						«О персональных данных»: <br/>

						<div class="row">
							<div class="col-xs-11">
								<textarea name="textarea"></textarea>
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>

						<br/>

						Средства обеспечения безопасности:

						<div class="row">
							<div class="col-xs-11">
								<textarea name="textarea"></textarea>
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>

						<br/>

						<div class="row">
							<div class="col-xs-1">
								<input type="checkbox" name="field[]" value="Y" id="field_11">
							</div>
							<div class="col-xs-10">
								<label for="field_11">Использование шифровальных (криптографических) средств</label>
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>

						<br/><br/><br/>

						Ответственный за организацию обработки персональных данных: <br/>

						<div class="row">
							<div class="col-xs-1">
								<input type="radio" name="radio-4" value="Y" id="field_12">
							</div>
							<div class="col-xs-11">
								<label for="field_12">Сторонняя организация</label>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-1">
								<input type="radio" name="radio-4" value="Y" id="field_13">
							</div>
							<div class="col-xs-11">
								<label for="field_13">Физическое лицо</label>
							</div>
						</div>

						<br/><br/><br/>

						<div class="medium-text">Номера контактных телефонов, почтовые адреса и адреса электронной почты</div>

						<br/>

						Телефоны: <br/>

						<div class="row">
							<div class="col-xs-11">
								<textarea name="textarea"></textarea>
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>

						<br/>

						Адреса: <br/>

						<div class="row">
							<div class="col-xs-11">
								<textarea name="textarea"></textarea>
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>

						<br/>

						Сведения об обеспечении безопасности персональных данных в соответствии с требованиями к защите персональных данных, установленными Правительством РФ: <br/>

						<div class="row">
							<div class="col-xs-11">
								<textarea name="textarea"></textarea>
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>

						<br/>

						Дата начала обработки персональных данных: <br/>

						<div class="row">
							<div class="col-xs-12">
								<input type="text" name="registration-date" value="" class="datepicker validate[required]">
							</div>
						</div>

						<br/>

						Срок или условие прекращения обработки персональных данных: <br/>

						<div class="row">
							<div class="col-xs-1">
								<input type="radio" name="radio-11" value="Y" id="field_21">
							</div>
							<div class="col-xs-11">
								<label for="field_21">Дата окончания</label>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-1">
								<input type="radio" name="radio-11" value="Y" id="field_22">
							</div>
							<div class="col-xs-11">
								<label for="field_22">Условие окончания</label>
							</div>
						</div>

						<br/>

						ФИО исполнителя: <br/>

						<div class="row">
							<div class="col-xs-11">
								<input type="text" name="base" value="">
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>

						<br/>

						Краткая информация исполнителя : <br/>

						<div class="row">
							<div class="col-xs-11">
								<input type="text" name="base" value="">
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>

						<br/>


						<!--
						<br/>
						<span class="small-text"><span class="red-text">*</span> Обязательно к заполнению</span>
						 -->

						<div class="clearfix"></div>
						<br/><br/>

						<div class="center-text"><input type="submit" value="Отправить"></div>
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