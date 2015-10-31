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
			<li><a href="#">Ответственные лица, комиссия</a></li>
			<li><a href="#">Ответственные лица</a></li>
		</ul>
		<!-- /BreadcrumbsBlock -->

		<div class="clearfix"></div>
		<div class="row">

			<!-- LeftColumn -->
			<div class="left-column col-xs-3">

				<div class="caption-block">Организация</div>

				<!-- LeftMenu -->
				<ul class="left-menu">
					<li class="active"><a href="#">Ответственные лица</a></li>
					<li><a href="#">Ответственные отделы</a></li>
					<li><a href="#">Комиссии</a></li>
				</ul>
				<!-- /LeftMenu -->

				<!-- LeftAdditionalBlock -->
				<?
					//				include('inc/__left_add_block.php');
				?>
				<!-- /LeftAdditionalBlock -->

			</div>
			<!-- /LeftColumn -->

			<!-- CenterColumn -->
			<div class="center-column col-xs-6">

				<!-- Caption -->
				<h1 class="caption-block">Ответственные лица</h1>
				<!-- /Caption -->

				<!-- Body -->
				<div class="body">

					В данном разделе необходимо выбрать ответственных из списка сотрудников В случае отсутствия в списке необходимого сотрудника, вернитесь к разделу «Об организации -» Список сотрудников» <br/>
					<br/>

					<form name="person-form" class="form-line-list" action="#" method="POST" enctype="multipart/form-data">

						Действующий на основании (в родительном падеже): <br/>

						<div class="row">
							<div class="col-xs-11">
								<select name="">
									<option>Выберите из списка</option>
									<option value="1">Значение 1</option>
									<option value="2">Значение 2</option>
									<option value="3">Значение 3</option>
								</select>
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>

						Ответственный за ознакомление с приказами: <br/>

						<div class="row">
							<div class="col-xs-11">
								<select name="">
									<option>Выберите из списка</option>
									<option value="1">Значение 1</option>
									<option value="2">Значение 2</option>
									<option value="3">Значение 3</option>
								</select>
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>

						Ответственный за ПД: <br/>

						<div class="row">
							<div class="col-xs-11">
								<select name="">
									<option>Выберите из списка</option>
									<option value="1">Значение 1</option>
									<option value="2">Значение 2</option>
									<option value="3">Значение 3</option>
								</select>
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>

						Ответственный за безопасность ПД: <br/>

						<div class="row">
							<div class="col-xs-11">
								<select name="">
									<option>Выберите из списка</option>
									<option value="1">Значение 1</option>
									<option value="2">Значение 2</option>
									<option value="3">Значение 3</option>
								</select>
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>

						Администратор ИБ: <br/>

						<div class="row">
							<div class="col-xs-11">
								<select name="">
									<option>Выберите из списка</option>
									<option value="1">Значение 1</option>
									<option value="2">Значение 2</option>
									<option value="3">Значение 3</option>
								</select>
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>

						Ответственный за антивирусную проверку: <br/>

						<div class="row">
							<div class="col-xs-11">
								<select name="">
									<option>Выберите из списка</option>
									<option value="1">Значение 1</option>
									<option value="2">Значение 2</option>
									<option value="3">Значение 3</option>
								</select>
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>

						Ответственный за техническое обслуживание: <br/>

						<div class="row">
							<div class="col-xs-11">
								<select name="">
									<option>Выберите из списка</option>
									<option value="1">Значение 1</option>
									<option value="2">Значение 2</option>
									<option value="3">Значение 3</option>
								</select>
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>

						Ответственный за криптосредства: <br/>

						<div class="row">
							<div class="col-xs-11">
								<select name="">
									<option>Выберите из списка</option>
									<option value="1">Значение 1</option>
									<option value="2">Значение 2</option>
									<option value="3">Значение 3</option>
								</select>
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>

						Заместитель ответственного за криптосредства: <br/>

						<div class="row">
							<div class="col-xs-11">
								<select name="">
									<option>Выберите из списка</option>
									<option value="1">Значение 1</option>
									<option value="2">Значение 2</option>
									<option value="3">Значение 3</option>
								</select>
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>

						Действующий на основании (в родительном падеже): <br/>

						<div class="row">
							<div class="col-xs-11">
								<select name="">
									<option>Выберите из списка</option>
									<option value="1">Значение 1</option>
									<option value="2">Значение 2</option>
									<option value="3">Значение 3</option>
								</select>
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

						<div class="center-text"><input type="submit" value="Сохранить изменения"></div>
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
				<div class="caption-block">Документы ПД</div>
				<div class="doc-list-block">
					<div class="center-text">
						<div class="regular-text">0 из 6</div>
						<div>документов готовы к формированию</div>
					</div>

					<br/>

					<ul>
						<li>
							<div class="progress progress-box">
								<div class="progress-bar" style="width: 85%;"><span class="sr-only">Завершено 85%</span></div>
							</div>
							Приказ Об организации работы по ЗКИ и ПД
						</li>
						<li>
							<div class="progress progress-box">
								<div class="progress-bar" style="width: 80%;"><span class="sr-only">Завершено 80%</span></div>
							</div>
							Об организации работы с персональными данными
						</li>
						<li>
							<div class="progress progress-box">
								<div class="progress-bar" style="width: 70%;"><span class="sr-only">Завершено 70%</span></div>
							</div>
							Об обучении сотрудников правилам защиты информации
						</li>
						<li>
							<div class="progress progress-box">
								<div class="progress-bar" style="width: 60%;"><span class="sr-only">Завершено 60%</span></div>
							</div>
							О внутренних проверках соблюдения правил защиты конфиденциальной информации, в том числе персональных данных
						</li>
						<li>
							<div class="progress progress-box">
								<div class="progress-bar" style="width: 50%;"><span class="sr-only">Завершено 50%</span></div>
							</div>
							Об утверждении разрешительной системы допуска
						</li>
						<li>
							<div class="progress progress-box">
								<div class="progress-bar" style="width: 43%;"><span class="sr-only">Завершено 43%</span></div>
							</div>
							О назначении ответственного пользователя криптосредств
						</li>
					</ul>

				</div>
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