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
			<li><a href="#">Статистика</a></li>
			<li><a href="#">Общая статистика по подведомственным организациям</a></li>
		</ul>
		<!-- /BreadcrumbsBlock -->

		<div class="clearfix"></div>
		<div class="row">

			<!-- LeftColumn -->
			<div class="left-column col-xs-3">

				<div class="caption-block">Разделы</div>

				<!-- LeftMenu -->
				<ul class="left-menu">
					<li class="active"><a href="#">Общая информация</a></li>
					<li><a href="#">Подведомственные учреждения</a></li>
					<li><a href="#">Отчеты</a></li>
					<li><a href="#">Проверка</a></li>
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
				<h1 class="caption-block">Общая статистика по подведомственным организациям</h1>
				<!-- /Caption -->

				<!-- Body -->
				<div class="body">

					<div class="medium-text">Документы</div>
					<br/>
					<ul class="empty-list">
						<li class="row">
							<div class="col-xs-8">О внутренних проверках соблюдения правил защиты конфиденциальной информации, в том числе персональных данных</div>
							<div class="col-xs-3 col-xs-offset-1">
								<input class="circularbar" data-width="90" data-height="90" data-fgColor="#00597c" data-skin="tron" data-thickness=".1" value="45" data-readOnly=true>
							</div>
						</li>
						<li class="row">
							<div class="col-xs-8">Об утверждении разрешительной системы допуска</div>
							<div class="col-xs-3 col-xs-offset-1">
								<input class="circularbar" data-width="90" data-height="90" data-fgColor="#00597c" data-skin="tron" data-thickness=".1" value="5" data-readOnly=true>
							</div>
						</li>
						<li class="row">
							<div class="col-xs-8">Об обучении сотрудников правилам защиты информации</div>
							<div class="col-xs-3 col-xs-offset-1">
								<input class="circularbar" data-width="90" data-height="90" data-fgColor="#00597c" data-skin="tron" data-thickness=".1" value="25" data-readOnly=true>
							</div>
						</li>
						<li class="row">
							<div class="col-xs-8">Об организации работы с персональными данными</div>
							<div class="col-xs-3 col-xs-offset-1">
								<input class="circularbar" data-width="90" data-height="90" data-fgColor="#00597c" data-skin="tron" data-thickness=".1" value="25" data-readOnly=true>
							</div>
						</li>
						<li class="row">
							<div class="col-xs-8">О назначении ответственного пользователя криптосредств</div>
							<div class="col-xs-3 col-xs-offset-1">
								<input class="circularbar" data-width="90" data-height="90" data-fgColor="#00597c" data-skin="tron" data-thickness=".1" value="25" data-readOnly=true>
							</div>
						</li>
					</ul>
					<br/>

					<div class="medium-text">Документы</div>
					<br/>

					<ul class="empty-list">
						<li class="row">
							<div class="col-xs-8">Определение перечня защищаемых ресурсов</div>
							<div class="col-xs-3 col-xs-offset-1">
								<input class="circularbar" data-width="90" data-height="90" data-fgColor="#00597c" data-skin="tron" data-thickness=".1" value="25" data-readOnly=true>
							</div>
						</li>
						<li class="row">
							<div class="col-xs-8">Регистрация в качестве Оператора на сайте Роскомнадзора</div>
							<div class="col-xs-3 col-xs-offset-1">
								<input class="circularbar" data-width="90" data-height="90" data-fgColor="#00597c" data-skin="tron" data-thickness=".1" value="25" data-readOnly=true>
							</div>
						</li>
						<li class="row">
							<div class="col-xs-8">Определение порядка резервного копирования</div>
							<div class="col-xs-3 col-xs-offset-1">
								<input class="circularbar" data-width="90" data-height="90" data-fgColor="#00597c" data-skin="tron" data-thickness=".1" value="25" data-readOnly=true>
							</div>
						</li>
						<li class="row">
							<div class="col-xs-8">Определение контрольных дат</div>
							<div class="col-xs-3 col-xs-offset-1">
								<input class="circularbar" data-width="90" data-height="90" data-fgColor="#00597c" data-skin="tron" data-thickness=".1" value="25" data-readOnly=true>
							</div>
						</li>
						<li class="row">
							<div class="col-xs-8">Определение перечня актуальных угроз</div>
							<div class="col-xs-3 col-xs-offset-1">
								<input class="circularbar" data-width="90" data-height="90" data-fgColor="#00597c" data-skin="tron" data-thickness=".1" value="25" data-readOnly=true>
							</div>
						</li>
						<li class="row">
							<div class="col-xs-8">Выполнение мероприятий для средств криптографической защиты</div>
							<div class="col-xs-3 col-xs-offset-1">
								<input class="circularbar" data-width="90" data-height="90" data-fgColor="#00597c" data-skin="tron" data-thickness=".1" value="25" data-readOnly=true>
							</div>
						</li>
					</ul>

				</div>
				<!-- /Body -->

			</div>
			<!-- CenterColumn -->

			<!-- RightColumn -->
			<div class="right-column col-xs-3">

				<div class="caption-block"><br/></div>
				<div class="border-block border-3px center-text">

					Общий процент готовности
					<div class="circularbar-block"><input class="circularbar" data-width="130" data-height="130" data-fgColor="#00597c" data-skin="tron" data-thickness=".1" value="25" data-readOnly=true></div>

					</input>

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