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
			<li><a href="#">Управление профилем</a></li>
		</ul>
		<!-- /BreadcrumbsBlock -->

		<div class="clearfix"></div>
		<div class="row">

			<!-- Caption -->
			<h1 class="caption-block">Управление профилем</h1>
			<!-- /Caption -->

			<!-- LeftColumn -->
			<div class="left-column col-xs-8">

				<!-- ProfileFormColumn -->
				<?
					include ('inc/__profile-form-column.php');
				?>
				<!-- /ProfileFormColumn -->

			</div>
			<!-- /LeftColumn -->

			<!-- RightColumn -->
			<div class="right-column col-xs-4 column-border-left">

				<!-- ProfileInfoColumn -->
				<?
					include ('inc/__profile-info-column.php');
				?>
				<!-- /ProfileInfoColumn -->

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