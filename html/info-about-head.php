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

		<!-- LeftColumn -->
		<div class="left-column col-xs-4">

			<div class="caption-block">Общие сведения</div>

			<!-- LeftMenu -->
			<ul class="left-menu">
				<li><a href="#">Об организации</a></li>
				<li><a href="#">Структура подразделений</a></li>
				<li><a href="#">Список должностей</a></li>
				<li><a href="#">Список сотрудников</a></li>
				<li><a href="#">Список помещений</a></li>
				<li class="active"><a href="#">О руководителе</a></li>
			</ul>
			<!-- /LeftMenu -->

			<!-- DocumentBlock -->
			<br/><br/><br/>

			<div class="doc-block">
				<div class="caption-block">
					Документы
				</div>
				<br/><br/>
				0 из 0 документов <br/><br/>
				готовы к формированию <br/><br/><br/>
				<a href="#" class="button">Сформировать</a>

			</div>
			<!-- /DocumentBlock -->

			<!-- DocCounterBlock -->
			<br/><br/><br/>

			<div class="doc-counter-block">
				<div class="center-text">
					Счетчик
				</div>
				<br/><br/>
				0 документов выгружено <br/><br/>
				0 документов сформировано <br/><br/>
			</div>
			<!-- /DocCounterBlock -->

		</div>
		<!-- /LeftColumn -->

		<!-- RightColumn -->
		<div class="right-column col-xs-8">

			<!-- Caption -->
			<h1 class="caption">О руководителе</h1>
			<!-- /Caption -->

			<!-- Body -->
			<div class="body">

				В данном разделе выберите руководителя вашей организации из списка сотрудников <br/>
				<br/>
				Руководитель <br/>

				<form action="#">
					<div class="row">
						<div class="col-xs-11">
							<select name="post">
								<option value="1">ФИО. (Должность, отдел)</option>
								<option value="2">ФИО 2. (Должность, отдел)</option>
								<option value="3">ФИО 3. (Должность, отдел)</option>
							</select>
						</div>
						<div class="col-xs-1">
							<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
						</div>
					</div>
				</form>
				<div class="clearfix"></div>
				<br/>

				Действующий на основании (в родительном падеже): <br/>
				<div class="row">
					<div class="col-xs-11">
						<input type="text" name="base" value="">
					</div>
					<div class="col-xs-1">
						<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
					</div>
				</div>

				<div class="clearfix"></div>
				<br/><br/><br/><br/><br/>

				<div class="center-text"><a href="#" class="button">Добавить новый адрес</a></div>
				<div class="clearfix"></div>
				<br/><br/><br/><br/><br/>
				<a href="#" class="button button-prev">Назад</a>
				<a href="#" class="button button-next pull-right">Далее</a>

			</div>
			<!-- /Body -->

		</div>
		<!-- /RightColumn -->

	</div>
</div>
<!-- /MiddleBlock -->

<?
	include ('inc/_footer.php');
	include ('inc/_windows.php');
?>

</body>
</html>