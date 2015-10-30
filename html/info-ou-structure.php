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
				<li class="active"><a href="#">Структура подразделений</a></li>
				<li><a href="#">Список должностей</a></li>
				<li><a href="#">Список сотрудников</a></li>
				<li><a href="#">Список помещений</a></li>
				<li><a href="#">О руководителе</a></li>
			</ul>
			<!-- /LeftMenu -->

			<!-- LeftAdditionalBlock -->
			<?
				include('inc/__left_add_block.php');
			?>
			<!-- /LeftAdditionalBlock -->

		</div>
		<!-- /LeftColumn -->

		<!-- RightColumn -->
		<div class="right-column col-xs-8">

			<!-- Caption -->
			<h1 class="caption-block">Структура подразделений</h1>
			<!-- /Caption -->

			<!-- Body -->
			<div class="body">

				В данном разделе необходимо составить иерархический список подразделений Вашей организации (учреждения). <br/>
				<br/>
				Для добавления нового подразделения необходимо нажать кнопку «Добавить новое», после чего в модальном окне ввести наименование подразделения. В случае необходимости также требуется выбрать вышестоящее подразделение. После создания списка нажмите кнопку «Далее». Для удаления нажмите «Удалить». Для изменения данных отредактируйте соответствующее поле.

				<div class="clearfix"></div>
				<br/><br/><br/>

				<form action="#">
					<div class="row">

						<div class="col-xs-7" style="line-height: 51px; display: table-cell; vertical-align: middle;">
							<input type="text" name="field" class="validate[required]">
						</div>
						<div class="col-xs-3"><input type="submit" value="Добавить"></div>
					</div>
				</form>
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