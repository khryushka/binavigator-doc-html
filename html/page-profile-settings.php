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
			<li><a href="#">Настройка профиля</a></li>
		</ul>
		<!-- /BreadcrumbsBlock -->

		<div class="clearfix"></div>
		<div class="row">

			<!-- Caption -->
			<!--h1 class="caption-block">Настройка профиля</h1-->
			<!-- /Caption -->

			<!-- LinkBlock -->
			<div class="link-block">
				<!--
				<a href="#">Настройка профиля</a> &nbsp; | &nbsp; Настройка стилей документации
				 -->
				Настройка профиля &nbsp; | &nbsp; <a href="#">Настройка стилей документации</a>
			</div>
			<div class="clearfix"></div>
			<!-- LinkBlock -->

			<!-- LeftColumn -->
			<div class="left-column col-xs-4 column-border-right">

				<!-- ProfileInfoColumn -->
				<?
					include ('inc/__profile-info-column.php');
				?>
				<!-- /ProfileInfoColumn -->

			</div>
			<!-- /LeftColumn -->

			<!-- RightColumn -->
			<div class="right-column col-xs-8">

				<!-- ProfileFormColumn -->
				<?
					include ('inc/__profile-form-column.php');
				?>
				<!-- /ProfileFormColumn -->

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