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
		</ul>
		<!-- /BreadcrumbsBlock -->

		<div class="clearfix"></div>
		<div class="row">

			<!-- LeftColumn -->
			<div class="left-column col-xs-4">

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
					include ('inc/__left_add_block.php');
				?>
				<!-- /LeftAdditionalBlock -->

			</div>
			<!-- /LeftColumn -->

			<!-- RightColumn -->
			<div class="right-column col-xs-8">

				<!-- Caption -->
				<h1 class="caption-block">Ответственные лица, комиссия</h1>
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