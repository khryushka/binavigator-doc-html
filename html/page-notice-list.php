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
		<!--
		<div class="ask-expert-block">
			<a href="#">Спросить у эксперта</a>
		</div>
		 -->
		<!-- /AskExpertBlock -->

		<!-- BreadcrumbsBlock -->
		<ul class="breadcrumbs-block">
			<li><a href="#">Главная</a></li>
			<li><a href="#">Уведомления</a></li>
		</ul>
		<!-- /BreadcrumbsBlock -->

		<div class="clearfix"></div>
		<div class="row">

			<!-- LeftColumn -->
			<div class="left-column col-xs-4">

				<div class="caption-block">Разделы</div>

				<!-- LeftMenu -->
				<ul class="left-menu">
					<li class="active"><a href="#">Срочные</a></li>
					<li><a href="#">Все</a></li>
					<li><a href="#">Архив</a></li>
				</ul>
				<!-- /LeftMenu -->

				<!-- LeftAdditionalBlock -->
				<?
					// include ('inc/__left_add_block.php');
				?>
				<!-- /LeftAdditionalBlock -->

			</div>
			<!-- /LeftColumn -->

			<!-- RightColumn -->
			<div class="right-column col-xs-8">

				<!-- Caption -->
				<h1 class="caption-block">Уведомления</h1>
				<!-- /Caption -->

				<!-- Body -->
				<div class="body">

					<form id="fileupload" class="fileupload-png" data-max-number-of-files="1" action="#t=<?= time () ?>" method="POST" enctype="multipart/form-data">

						<div class="row">
							<div class="col-xs-9 right-text">
								Дата от: &nbsp;<input type="text" name="date-begin" value="" class="datepicker"> &nbsp; &nbsp; до: &nbsp;<input type="text" name="date-end" value="" class="datepicker">
							</div>
							<div class="col-xs-3">
								<input type="reset" value="Сбросить" style="width: 130px;">
							</div>
						</div>
						<div class="row">
							<div class="col-xs-9 text-right">
								Тип:
								<div style="width: 350px; display: inline-block; text-align: left;">
									<select name="type">
										<option>все</option>
										<option value="1">прочитанные</option>
										<option value="2">непрочитанные</option>
									</select>
								</div>
							</div>
							<div class="col-xs-3">
								<input type="submit" value="Прочитать" style="width: 130px;">
							</div>
						</div>

						<div class="column-border-left row">
							<div>&nbsp;</div>
							<div>&nbsp;</div>
							<div class="col-xs-12">
								Уведомлений нет
							</div>
							<div>&nbsp;</div>
							<div>&nbsp;</div>
						</div>





						<!--
						<div class="clearfix"></div>
						<br/><br/>

						<div class="center-text"><input type="submit" value="Сохранить изменения"></div>
						<div class="clearfix"></div>
						<br/><br/><br/>
						<a href="#" class="button button-prev">Назад</a>
						<a href="#" class="button button-next pull-right">Далее</a>
						 -->

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