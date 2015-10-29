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

		<!-- LeftColumn -->
		<div class="left-column col-xs-4 left-column-border-right">

			<div class="caption-block">Информация</div>
			<br/>

			<div class="row">
				<div class="col-xs-6 right-text">Логин:</div>
				<div class="col-xs-6">Some text</div>
			</div>
			<br/>

			<div class="row">
				<div class="col-xs-6 right-text">E-mail:</div>
				<div class="col-xs-6">Some text</div>
			</div>
			<br/>

			<div class="row">
				<div class="col-xs-6 right-text">Наименование организации:</div>
				<div class="col-xs-6">Some text</div>
			</div>
			<br/>

			<div class="row">
				<div class="col-xs-6 right-text">Тариф:</div>
				<div class="col-xs-6">Демо</div>
			</div>
			<br/>

			<div class="row">
				<div class="col-xs-6 right-text">Срок действия тарифа:</div>
				<div class="col-xs-6"><?= date ('d') ?>.<?= date ('m') ?>.<?= date ('Y') + 1 ?></div>
			</div>
			<br/>

			<br/>
			<br/>

			<div class="caption-block">Сведения <br/>
				о последнем сеансе
			</div>
			<br/>

			<div class="row">
				<div class="col-xs-6 right-text">Дата входа:</div>
				<div class="col-xs-6 small-text" style="padding-top: 5px;">05.10.2015 06:30</div>
			</div>
			<br/>

			<div class="row">
				<div class="col-xs-6 right-text">IP:</div>
				<div class="col-xs-6 small-text" style="padding-top: 5px;">10.100.100.100</div>
			</div>
			<br/><br/><br/><br/><br/><br/><br/>

			<div class="center-text">
				<a href="#" class="big-text light-text">Удалить аккаунт</a>
			</div>

		</div>
		<!-- /LeftColumn -->

		<!-- RightColumn -->
		<div class="right-column col-xs-8">

			<!-- Caption -->
			<!--h1 class="caption-block">Настройка профиля</h1-->
			<!-- /Caption -->

			<!-- Body -->
			<div class="body">

				<form id="fileupload" class="fileupload-images" data-max-number-of-files="1" action="#t=<?= time () ?>" method="POST" enctype="multipart/form-data">

					<div class="row">
						<div class="col-xs-3 text-right" style="margin: 7px 0;">
							ФИО <span class="red-text">*</span>:
						</div>
						<div class="col-xs-8">
							<input type="text" name="name" value="" class="validate[required]">
						</div>
						<div class="col-xs-1">
							<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-3 text-right" style="margin: 7px 0;">
							Должность:
						</div>
						<div class="col-xs-8">
							<input type="text" name="post" value="">
						</div>
						<div class="col-xs-1">
							<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-3 text-right" style="margin: 7px 0;">
							Часовой пояс:
						</div>
						<div class="col-xs-8">
							<input type="text" name="time-zone" value="">
						</div>
						<div class="col-xs-1">
							<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-3 text-right" style="margin: 7px 0;">
							E-mail <span class="red-text">*</span>:
						</div>
						<div class="col-xs-8">
							<input type="text" name="email" value="" class="validate[required,custom[email]]">
						</div>
						<div class="col-xs-1">
							<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-3 text-right" style="margin: 7px 0;"></div>
						<div class="col-xs-8">
							<input type="checkbox" name="subscribe-checkbox" value="Y" id="subscribe-checkbox"><label for="subscribe-checkbox" class="micro-text">Подписка на информационные рассылки</label>
						</div>
						<div class="col-xs-1"></div>
					</div>


					<!-- PasswordChangeBlock -->
					<div class="password-change-block" style="display: none;">

						<input type="hidden" name="password-change" value="Y">

						<br/>

						<div class="row">
							<div class="col-xs-3 text-right small-text" style="margin: 11px 0; line-height: 1em;">
								Новый пароль&nbsp;<span class="red-text">*</span>:
							</div>
							<div class="col-xs-8">
								<input type="password" name="password" id="password" value="" class="validate[required,minSize[6]]">
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 7px 0;" title="Поясняющая информация"></div>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-3 text-right small-text" style="margin: 5px 0; line-height: 1em;">
								Подтверждение нового пароля&nbsp;<span class="red-text">*</span>:
							</div>
							<div class="col-xs-8">
								<input type="password" name="password-confirm" value="" class="validate[equals[password]]">

								<div class="pull-right">
									<a href="#" class="micro-text red-text link-case-forms" onclick="$('.password-change-over-block').show(); $('.password-change-block').hide(); return false;">Не менять пароль</a>
								</div>
							</div>
							<div class="col-xs-1">
								<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
							</div>
						</div>

					</div>

					<div class="password-change-over-block">

						<div class="row">
							<br/>

							<div class="col-xs-8 col-xs-offset-3 center-text">
								<a href="#" class="button password-change" onclick="$('.password-change-over-block').hide(); $('.password-change-block').show(); return false;">Сменить пароль</a>
							</div>
							<br/>
						</div>

					</div>
					<!-- /PasswordChangeBlock -->

					<br/><br/>

					<div class="row">
						<div class="col-xs-3 text-right" style="margin: 7px 0;">
							Фотография:
						</div>
						<div class="col-xs-8">
							<div class="avatar-big-block">
								<img src="images/content/avatar-blank.png" width="118" height="104" alt="">
							</div>
						</div>
						<div class="col-xs-1">
							<div class="question-icon icon-32x32" style="margin: 5px 0;" title="Поясняющая информация"></div>
						</div>
					</div>

					<div class="fileupload-buttonbar row">
						<div class="col-xs-3 text-right" style="margin: 7px 0;"></div>
						<div class="col-xs-8">

							<!-- The fileinput-button span is used to style the file input field as button -->
							<span class="button button-green button-small fileinput-button" style="margin-top: 10px;">
								<i class="glyphicon glyphicon-edit"></i>
								<span>Изменить...</span>
								<input type="file" name="files[]" multiple>
							</span>

						</div>
						<div class="col-xs-1">

						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">

							<!-- The table listing the files available for upload/download -->
							<table role="presentation" class="table table-striped">
								<tbody class="files"></tbody>
							</table>

						</div>
					</div>

					<div class="row">

						<br/><br/><br/>

						<div class="col-xs-8 col-xs-offset-3 center-text">
							<input type="submit" value="Сохранить изменения">
						</div>
						<br/>
					</div>
				</form>

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