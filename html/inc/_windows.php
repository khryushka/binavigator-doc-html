<!-- Windows -->

<!-- EditCaseWindow -->
<div class="modal fade" id="edit-case-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="caption-block modal-title">Редактирование падёжных форм</h4>
			</div>
			<form action="#">
				<div class="modal-body">

					<div class="row">
						<div class="col-xs-12">
							Изменительный падеж (кто? что?) <span class="red-text">*</span><br/>
							<input type="text" name="" value="" class="validate[required]">
						</div>
					</div>
					<br/>

					<div class="row">
						<div class="col-xs-12">
							Родительный падеж (кого? чего?) <span class="red-text">*</span><br/>
							<input type="text" name="" value="" class="validate[required]">
						</div>
					</div>
					<br/>

					<div class="row">
						<div class="col-xs-12">
							Дательный падеж (кому? чему?) <span class="red-text">*</span><br/>
							<input type="text" name="" value="" class="validate[required]">
						</div>
					</div>
					<br/>

					<div class="row">
						<div class="col-xs-12">
							Винительный падеж (кого? что?) <span class="red-text">*</span><br/>
							<input type="text" name="" value="" class="validate[required]">
						</div>
					</div>
					<br/>

					<div class="row">
						<div class="col-xs-12">
							Творительный падеж (кем? чем?) <span class="red-text">*</span><br/>
							<input type="text" name="" value="" class="validate[required]">
						</div>
					</div>
					<br/>

					<div class="row">
						<div class="col-xs-12">
							Предложный падеж (о ком? о чём?) <span class="red-text">*</span><br/>
							<input type="text" name="" value="" class="validate[required]">
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
