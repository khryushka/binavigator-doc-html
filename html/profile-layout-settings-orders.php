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
			<li><a href="#">Рабочий стол</a></li>
			<li><a href="#">Настройки</a></li>
			<li><a href="#">Настройка стилей документации</a></li>
		</ul>
		<!-- /BreadcrumbsBlock -->

		<div class="clearfix"></div>
		<div class="row">

			<!-- CenterColumn -->
			<div class="center-column">
				<div class="col-xs-12">

					<!-- Caption -->
					<!--h1 class="caption-block">Ответственность за нарушения и проверки контролирующих органов </h1-->
					<!-- /Caption -->

					<!-- LinkBlock -->
					<div class="link-block">
						<a href="#">Настройка профиля</a> &nbsp; | &nbsp; Настройка стилей документации
						<!--
						Настройка профиля &nbsp; | &nbsp; <a href="#">Настройка стилей документации</a>
						 -->
					</div>
					<div class="clearfix"></div>
					<!-- LinkBlock -->

					<!-- Body -->
					<div class="body">

						<div class="col-xs-10 col-xs-offset-1">
							<div class="column-border-left row">
								<div class="col-xs-12">
									<p>
										Для соответствия пакета документов с принятыми в вашей организации стандартами делопроизводства,
										выберите вид документов и настройте его элементы:
									</p>
									шапка документов, <br/>
									внешний вид и оформление заголовков, <br/>
									наличие или отсутствие дат и номеров документов, <br/>
									варианты написания некоторых слов (приказ или распоряжение), и т.д.
								</div>
							</div>
						</div>

						<div class="clearfix"></div>
						<br/><br/>

						<?
							include ('inc/__select-profile-layout.php');
						?>

						<script>
							(function ($) {
								$(document).ready(function () {
									$('.li-block').find('li').eq(0).trigger('click');
								});
							})(jQuery);
						</script>


					</div>
					<!-- /Body -->

				</div>

			</div>
			<!-- CenterColumn -->

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