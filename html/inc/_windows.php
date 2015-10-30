<!-- Windows -->

<!-- SelectHeaderWindow -->
<div class="modal fade" id="select-header-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<div class="modal-title">Выбор шапки</div>
			</div>
			<form id="fileupload" class="fileupload-images" action="#t=<?= time () ?>" method="POST" enctype="multipart/form-data">
				<div class="modal-body">

					<div class="row">
						<div class="col-xs-5">
							Файл шапки документов
						</div>
						<div class="col-xs-7">
							<select name="">
								<option>Выберите из списка</option>
								<option value="1">Значение 1</option>
								<option value="2">Значение 2</option>
								<option value="3">Значение 3</option>
							</select>

							<div class="clearfix"></div>

							<!-- The fileinput-button span is used to style the file input field as button -->
							<span class="button button-green button-small fileinput-button" style="margin-top: 10px;">
								<i class="glyphicon glyphicon-plus"></i>
								<span>Добавить файл...</span>
								<input type="file" name="files[]" multiple>
							</span>


						</div>
					</div>

					<div class="row">
						<div class="col-xs-12 center-text">


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

				</div>
				<div class="modal-footer">
					<div class="row">
						<div class="col-xs-6 col-xs-offset-3 center-text">
							<input type="submit" class="button" value="Сохранить">
						</div>
						<!--
						<div class="col-xs-3 pull-right">
							<button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Закрыть</button>
						</div>
						 -->
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /SelectHeaderWindow -->

<!-- ErrorWindow -->
<div class="modal fade error-modal" id="error-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<div class="modal-title">Заявка на повторное формирование пакета документов</div>
			</div>
			<div class="modal-body">

				<div class="center-text">
					Выполнение данной операции в демо-режиме невозможно.
					<br/><br/>
					Для перехода в расширенную версию сервиса подключитесь по одному из представленных тарифов
				</div>

			</div>
			<div class="modal-footer">
				<div class="pull-right">
					<button type="button" class="button button-small button-dim-blue" data-dismiss="modal" aria-hidden="true">Закрыть</button>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /ErrorWindow -->

<!-- InfoSectionWindow -->
<div class="modal fade" id="info-section-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<div class="modal-title">Информация о разделе «Оперативные мероприятия»</div>
			</div>
			<form action="#">
				<div class="modal-body">

					Данный раздел представляет собой сборник задач, которые могут ежедневно встречаться в деятельности Организации и Администратора информационной безопасности, в частности. <br/><br/>
					В этом разделе вы можете производить действия по созданию, удалению и редактированию пользователей, ответственных лиц. информационных систем, подразделений, кабинетов в которых осуществляется обработка ПДн. <br/><br/>
					После вышеуказанных действий сервис автоматически добавит изменения в необходимые документы и предоставит вам соответствующиенормативные акты о внесении изменений. <br/><br/>
					Также в разделе собраны все необходимые журналы и акты.

				</div>
				<div class="modal-footer">
					<div class="row">
						<div class="col-xs-6 col-xs-offset-3 center-text">
							<!--
							<input type="submit" class="button" value="Войти">

							<br/><br/><br/>
							<a href="#">Регистрация</a>
							 -->
						</div>
						<div class="col-xs-3 pull-right">
							<button type="button" class="button" data-dismiss="modal" aria-hidden="true">Закрыть</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /InfoSectionWindow -->

<!-- EntryWindow -->
<div class="modal fade" id="entry-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<div class="modal-title">Введите логин и пароль</div>
			</div>
			<form action="#">
				<div class="modal-body">

					<div class="row">
						<div class="col-xs-4 text-right" style="margin: 7px 0;">
							Логин:
						</div>
						<div class="col-xs-6">
							<input type="text" name="login" value="" class="validate[required]">
						</div>
					</div>

					<div class="row">
						<div class="col-xs-4 text-right" style="margin: 7px 0;">
							Пароль:
						</div>
						<div class="col-xs-6">
							<input type="password" name="password" value="" class="validate[required]">

							<br/>
							<a href="#">Забыли пароль?</a>
						</div>
					</div>

					<br/><br/>

					<div class="row">
						<div class="col-xs-4 text-right" style="margin: 7px 0;">
							Статус плагина:
						</div>
						<div class="col-xs-6">
							<input type="text" name="plugin-status" value="Плагин загружен" class="" readonly>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-4 text-right" style="margin: 7px 0;">
							ЭП:
						</div>
						<div class="col-xs-6">
							<select name="">
								<option>Выберите из списка</option>
								<option value="1">Значение 1</option>
								<option value="2">Значение 2</option>
								<option value="3">Значение 3</option>
							</select>
						</div>
					</div>

					<br/>

				</div>
				<div class="modal-footer">
					<div class="row">
						<div class="col-xs-6 col-xs-offset-3 center-text">
							<input type="submit" class="button" value="Войти">

							<br/><br/><br/>
							<a href="#">Регистрация</a>
						</div>
						<!--
						<div class="col-xs-3 pull-right">
							<button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Закрыть</button>
						</div>
						 -->
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /EntryWindow -->

<!-- RegistrationWindow -->
<div class="modal fade" id="registration-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<div class="modal-title">Регистрация</div>
			</div>
			<form action="#">
				<div class="modal-body">

					<div class="row">
						<div class="col-xs-5 text-right" style="margin: 7px 0;">
							Фамилия <span class="red-text">*</span>:
						</div>
						<div class="col-xs-6">
							<input type="text" name="" value="" class="validate[required]">
						</div>
					</div>

					<div class="row">
						<div class="col-xs-5 text-right" style="margin: 7px 0;">
							Имя <span class="red-text">*</span>:
						</div>
						<div class="col-xs-6">
							<input type="text" name="" value="" class="validate[required]">
						</div>
					</div>

					<div class="row">
						<div class="col-xs-5 text-right" style="margin: 7px 0;">
							Отчество <span class="red-text">*</span>:
						</div>
						<div class="col-xs-6">
							<input type="text" name="" value="" class="validate[required]">
						</div>
					</div>

					<div class="row">
						<div class="col-xs-5 text-right" style="margin: 7px 0;">
							E-mail <span class="red-text">*</span>:
						</div>
						<div class="col-xs-6">
							<input type="text" name="email" value="" class="validate[required,custom[email]]">
						</div>
					</div>

					<div class="row">
						<div class="col-xs-5 text-right" style="margin: 7px 0;">
							Телефон:
						</div>
						<div class="col-xs-6">
							<input type="text" name="phone" value="" class="validate[custom[phone]]">
						</div>
					</div>

					<div class="row">
						<div class="col-xs-5 text-right" style="margin: 7px 0;">
							Название организации:
						</div>
						<div class="col-xs-6">
							<input type="text" name="company-name" value="" class="">
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<div class="row">
						<div class="col-xs-6 col-xs-offset-3 center-text">
							<input type="submit" class="button" value="Зарегистрироваться">
						</div>
						<!--
						<div class="col-xs-3 pull-right">
							<button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Закрыть</button>
						</div>
						 -->
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /RegistrationWindow -->

<!-- PartnershipWindow -->
<div class="modal fade" id="partnership-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<div class="modal-title">Заявка на партнёрство</div>
			</div>
			<form action="#">
				<div class="modal-body">

					<div class="row">
						<div class="col-xs-6 text-right" style="margin: 7px 0;">
							Наименование организации <span class="red-text">*</span>:
						</div>
						<div class="col-xs-6">
							<input type="text" name="company-name" value="" class="validate[required]">
						</div>
					</div>

					<div class="row">
						<div class="col-xs-6 text-right" style="margin: 7px 0;">
							ИНН <span class="red-text">*</span>:
						</div>
						<div class="col-xs-6">
							<input type="text" name="inn" value="" class="validate[required]">
						</div>
					</div>

					<div class="row">
						<div class="col-xs-6 text-right" style="margin: 7px 0;">
							ФИО <span class="red-text">*</span>:
						</div>
						<div class="col-xs-6">
							<input type="text" name="name" value="" class="validate[required]">
						</div>
					</div>

					<div class="row">
						<div class="col-xs-6 text-right" style="margin: 7px 0;">
							Город <span class="red-text">*</span>:
						</div>
						<div class="col-xs-6">
							<input type="text" name="city" value="" class="validate[required]">
						</div>
					</div>

					<div class="row">
						<div class="col-xs-6 text-right" style="margin: 7px 0;">
							E-mail <span class="red-text">*</span>:
						</div>
						<div class="col-xs-6">
							<input type="text" name="email" value="" class="validate[required,custom[email]]">
						</div>
					</div>

					<div class="row">
						<div class="col-xs-6 text-right" style="margin: 7px 0;">
							Телефон <span class="red-text">*</span>:
						</div>
						<div class="col-xs-6">
							<input type="text" name="phone" value="" class="validate[required,custom[phone]]">
						</div>
					</div>

					<div class="row">
						<div class="col-xs-6 text-right" style="margin: 7px 0;">
							Комментарий <span class="red-text">*</span>:
						</div>
						<div class="col-xs-6">
							<textarea name="message" class="validate[required]"></textarea>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<div class="row">
						<div class="col-xs-6 col-xs-offset-3 center-text">
							<input type="submit" class="button" value="Отправить заявку">
						</div>
						<!--
						<div class="col-xs-3 pull-right">
							<button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Закрыть</button>
						</div>
						 -->
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /PartnershipWindow -->

<!-- FeedbackWindow -->
<div class="modal fade" id="feedback-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<div class="modal-title">Отправка вопроса</div>
			</div>
			<form action="#">
				<div class="modal-body">

					<div class="row">
						<div class="col-xs-5 text-right" style="margin: 7px 0;">
							ФИО <span class="red-text">*</span>:
						</div>
						<div class="col-xs-6">
							<input type="text" name="name" value="" class="validate[required]">
						</div>
					</div>

					<div class="row">
						<div class="col-xs-5 text-right" style="margin: 7px 0;">
							Город:
						</div>
						<div class="col-xs-6">
							<input type="text" name="city" value="">
						</div>
					</div>

					<div class="row">
						<div class="col-xs-5 text-right" style="margin: 7px 0;">
							E-mail <span class="red-text">*</span>:
						</div>
						<div class="col-xs-6">
							<input type="text" name="email" value="" class="validate[required,custom[email]]">
						</div>
					</div>

					<div class="row">
						<div class="col-xs-5 text-right" style="margin: 7px 0;">
							Телефон:
						</div>
						<div class="col-xs-6">
							<input type="text" name="phone" value="" class="validate[custom[phone]]">
						</div>
					</div>

					<div class="row">
						<div class="col-xs-5 text-right" style="margin: 7px 0;">
							Вопрос <span class="red-text">*</span>:
						</div>
						<div class="col-xs-6">
							<textarea name="message" class="validate[required]"></textarea>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<div class="row">
						<div class="col-xs-6 col-xs-offset-3 center-text">
							<input type="submit" class="button" value="Отправить вопрос">
						</div>
						<!--
						<div class="col-xs-3 pull-right">
							<button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Закрыть</button>
						</div>
						 -->
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /FeedbackWindow -->

<!-- EditCaseWindow -->
<div class="modal fade" id="edit-case-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<div class="modal-title">Редактирование падёжных форм</div>
			</div>
			<form action="#">
				<div class="modal-body">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">

							<div class="row">
								<div class="col-xs-12">
									Изменительный падеж (Кто? Что?) <span class="red-text">*</span><br/>
									<input type="text" name="" value="" class="validate[required]">
								</div>
							</div>
							<br/>

							<div class="row">
								<div class="col-xs-12">
									Родительный падеж (Кого? Чего?) <span class="red-text">*</span><br/>
									<input type="text" name="" value="" class="validate[required]">
								</div>
							</div>
							<br/>

							<div class="row">
								<div class="col-xs-12">
									Дательный падеж (Кому? Чему?) <span class="red-text">*</span><br/>
									<input type="text" name="" value="" class="validate[required]">
								</div>
							</div>
							<br/>

							<div class="row">
								<div class="col-xs-12">
									Винительный падеж (Кого? Что?) <span class="red-text">*</span><br/>
									<input type="text" name="" value="" class="validate[required]">
								</div>
							</div>
							<br/>

							<div class="row">
								<div class="col-xs-12">
									Творительный падеж (Кем? Чем?) <span class="red-text">*</span><br/>
									<input type="text" name="" value="" class="validate[required]">
								</div>
							</div>
							<br/>

							<div class="row">
								<div class="col-xs-12">
									Предложный падеж (О ком? О чём?) <span class="red-text">*</span><br/>
									<input type="text" name="" value="" class="validate[required]">
								</div>
							</div>

						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="row">
						<div class="col-xs-6 col-xs-offset-3 center-text">
							<input type="submit" class="button" value="Сохранить изменения">
						</div>
						<!--
						<div class="col-xs-3 pull-right">
							<button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Закрыть</button>
						</div>
						 -->
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /EditCaseWindow -->


<?
	return;
?>
<!-- Windows -->
<div id="win-block">

	<!-- ResultWindow -->
	<div class="mask bg"></div>
	<div class="mask div result-win center">
		<div class="window-form" id="result-content">

		</div>
	</div>
	<!-- /ResultWindow -->

	<div class="button-form-content" id="order-product-info">
		<div class="result-caption">Мы с радостью расскажем Вам об этой и других программах, пожалуйста, оставьте заявку ниже</div>
		<div class="result-body">
			<form action="send-message.php?win111" method="post" name="win11">
				<input type="hidden" name="formName" value=""/>
				<input type="hidden" name="winName" value="Заявка на подробности!"/>
				<input type="hidden" name="referer" value="<?= $_SERVER['HTTP_REFERER'] ?>"/>

				<div class="title"></div>
				<div class="name">Введите Ваше имя</div>
				<div><input type="text" name="name" value=""/></div>
				<div class="name">Введите телефон</div>
				<div><input type="text" name="phone" value="" placeholder="" class="validate[required,custom[phone]]" data-prompt-position="topLeft"/></div>
				<div class="name">Введите Ваш E-mail</div>
				<div><input type="text" name="email" value="" class="validate[required,custom[email]]" data-prompt-position="topLeft"/></div>
				<div><input type="submit" value="Отправить заявку" name="submit-button"/></div>
			</form>
		</div>
	</div>

	<div class="button-form-content" id="feed-back-order">
		<div class="result-caption">Обратный звонок</div>
		<div class="result-body">
			<form action="?feed-back" method="post" name="feed-back-form">
				<input type="hidden" name="formName" value="Заказ звонка (верхняя форма)"/>
				<input type="hidden" name="winName" value="Заказ звонка!"/>
				<input type="hidden" name="referer" value="<?= $_SERVER['HTTP_REFERER'] ?>"/>

				<div class="name">Введите Ваше имя</div>
				<div><input type="text" name="name" value=""/></div>
				<div class="name">Введите телефон</div>
				<div><input type="text" name="phone" value="" placeholder="" class="validate[required,custom[phone]]" data-prompt-position="bottomLeft"/></div>
				<div>
					<select name="day" id="feed-back-day">
						<option value="Сегодня">Сегодня</option>
						<option value="Завтра"<?= date ('H') > 18 ? ' selected=""' : '' ?>>Завтра</option>
					</select>
					<select name="time" id="feed-back-time">
						<option value="с 9:00 до 12:00 (мск)">с 9:00 до 12:00 (мск)</option>
						<option value="с 12:00 до 15:00 (мск)"<?= date ('H') >= 12 && date ('H') < 15 ? ' selected=""' : '' ?>>с 12:00 до 15:00 (мск)</option>
						<option value="с 15:00 до 18:00 (мск)"<?= date ('H') >= 15 && date ('H') < 18 ? ' selected=""' : '' ?>>с 15:00 до 18:00 (мск)</option>
					</select>
				</div>
				<div><input type="submit" value="Заказать звонок" name="submit-button"/></div>
			</form>
		</div>
	</div>


</div>
<!-- /Windows -->
