(function ($) {
	$(document).ready(function () {
		/**  hr **/
		$('hr').each(function () {
			$(this).replaceWith('<div style="clear: both; overflow: hidden;"><div class="hr' + (this.className ? ' ' + this.className : '') + '"><div></div></div></div>')
		});
		/**  /hr **/

		/** FormStyler **/
		$('.body input[type=checkbox], .body input[type=radio], .body select').styler({
			selectSearch: true
		});
		/** /FormStyler **/

		/** Tooltip **/
		$('.body [title]').tooltip();
		 /** /Tooltip **/

		/** pop-up-menu **/
		$('.sub-menu-container').on('mouseover', function () {
			var $this = $(this);
			$this.addClass('active');
		}).on('mouseout', function () {
			var $this = $(this);
			$this.removeClass('active');
		});
		$('.sub-menu-container > ul').on('mouseout', function () {
			var $this = $(this);
			$this.parent().removeClass('active');
		}).on('mouseover', function () {
			var $this = $(this);
			$this.parent().addClass('active');
		});
		/** /pop-up-menu **/

		/** StepsMenuBlock **/
		$('.steps-menu-block li').each(function (i) {
			var $this = $(this);
			$this.find('a').on('click', function () {
				$('.steps-menu-block li').removeClass('active');
				$('.steps-menu-block li').eq(i).addClass('active');
				$('.steps-content-block li').hide().eq(i).show();
				return false;
			});
		});
		$('.steps-content-block li').each(function (i) {
			var $this = $(this);
			var prevButton = $this.find('.button-prev');
			var nextButton = $this.find('.button-next');
			if (i == 0) {
				prevButton.hide();
			}
			else {
				prevButton.on('click', function () {
					$('.steps-menu-block li').eq(i - 1).find('a').trigger('click');
					return false;
				});
			}
			if (i == $('.steps-menu-block li').length - 1) {
				nextButton.hide();
			}
			else {
				nextButton.on('click', function () {
					$('.steps-menu-block li').eq(i + 1).find('a').trigger('click');
					return false;
				});
			}
		});
		$('.steps-menu-block li').eq(0).find('a').trigger('click');
		/** /StepsMenuBlock **/

		/** body background **/
		/*
		 $(window).resize(function () {
		 var backgroundPosition = 'top center';
		 var winWidth = $(window).width();
		 var bgImageWidth = 1020; // ширина контентной области (ширина body)
		 if (winWidth < bgImageWidth) {
		 backgroundPosition = '-450px 0'; // левый край контентной области (= - (ширина_фона - bgImageWidth) / 2)
		 }
		 $('body').css({'backgroundPosition': backgroundPosition})
		 });
		 $(window).trigger('resize');
		 */
		/** /body background **/


		/** WindowForm **/
		/*
		 $('.content-button').on('click', function () {
		 var $this = $(this);
		 if ($this.next('.button-form-content').length) {
		 var html = $this.next('.button-form-content').html()
		 }
		 else if ($this.attr('rel')) {
		 var win = $($this.attr('rel'));
		 //win.find('form input[name=formName]').val('Заказ подробностей - интересует: ' + $this.attr('product') + '');
		 win.find('form .title').eq(0).html('<!-- Вас интересует:<br />--><b>' + $this.attr('product') + '</b>');
		 var html = win.html();
		 }
		 $('#result-content').html(html);
		 $('.result-win').removeClass('answer');
		 $('.mask').show();
		 $('.mask.div').screenCenterAlign();
		 initSubmitForm();
		 return false;
		 });
		 $(this).keydown(function (eventObject) {
		 if (eventObject.which == 27) {
		 $('.mask').hide();
		 }
		 });
		 $('.mask.bg').on('click', function (eventObject) {
		 $('.mask').hide();
		 });
		 */
		/** /WindowForm **/

		/** windows **/
		/*
		 $('.mask.div').append('<a href="#" title="Закрыть" class="close-button" onclick="$(\'.mask\').hide(0); return false;"></a>')
		 $('.mask.bg').css({background: '#000', opacity: .6});
		 $('#win-block').appendTo('body');
		 centerMask();
		 $(window).resize(function () {
		 centerMask();
		 }).scroll(function(){
		 centerMask();
		 })
		 //$('.mask.win1').show(0);
		 */
		/** /windows **/

		/** SubmitForms **/
		function initSubmitForm() {
			$("form:visible").each(function () {
				var $form = $(this);
				if (!$form.attr('init')) {
					$form.attr('init', 1);

					/*
					 $form.validationEngine('attach', {
					 bindMethod: "live",
					 scroll: false,
					 onValidationComplete: function (form, status) {
					 var $this = $(form);

					 if (status) {

					 // поля не заполенные и равные плейсхолдеру не отправляем ч.1
					 form.find('input').each(function () {
					 var $input = $(this);
					 if ($input.val() == $input.attr('rel')) {
					 $input.attr('placeholder', $input.attr('rel'));
					 $input.val('');
					 }
					 });
					 // /поля не заполенные и равные плейсхолдеру не отправляем ч.1

					 $.ajax({
					 type: 'post',
					 url: SITE_TEMPLATE_PATH + '/send-message.php?win=' + $this.attr('name'),
					 data: form.serialize(),
					 success: function (html) {
					 centerMask();
					 $('#result-content').html(html);
					 $('.result-win').addClass('answer');
					 $('.mask').show();
					 },
					 error: function () {
					 alert('Ошибка отправки на стороне браузера');
					 }
					 });

					 return false;
					 }
					 }
					 });
					 */
				}
			});
		}

		initSubmitForm();
		/** /SubmitForms **/

		/** search autocomplete **/
		/*
		 initAutocomplete();
		 */
		/** /search autocomplete **/
	});

	/*
	 // search autocomplete

	 //-// catcomplete-search-widget
	 $.widget("custom.catcomplete", $.ui.autocomplete, {
	 _create: function () {
	 this._super();
	 this.widget().menu("option", "items", "> :not(.ui-autocomplete-category)");
	 },
	 _renderMenu: function (ul, items) {
	 var that = this,
	 currentCategory = "";
	 $.each(items, function (index, item) {
	 var li;
	 if (item.category != currentCategory) {
	 ul.append("<li class='ui-autocomplete-category'>" + item.category + "</li>");
	 currentCategory = item.category;
	 }
	 li = that._renderItemData(ul, item);
	 if (item.category) {
	 li.attr({
	 "aria-label": item.category + " : " + item.label,
	 "class": (item.className ? 'icon-search icon-' + item.className : '')
	 });
	 }
	 });
	 }
	 });
	 //-// /catcomplete-search-widget

	 function initAutocomplete() {
	 $(".quick-search").each(function () {
	 var $this = $(this);
	 var author = ($this.hasClass('only-author') ? true : false); // поиск только в авторах
	 var ar = {
	 delay: 300,
	 source: function (request, response) {
	 // организуем кроссдоменный запрос
	 $.ajax({
	 url: SITE_TEMPLATE_PATH + "/js/ajax/quick-search/?quick-search=y" + (author ? '&only-author=y' : ""),
	 dataType: "json",
	 // параметры запроса, передаваемые на сервер (последний - подстрока для поиска):
	 data: {
	 term: request.term
	 },
	 // обработка успешного выполнения запроса
	 success: function (data) {
	 // приведем полученные данные к необходимому формату и передадим в предоставленную функцию response
	 response(data);
	 }
	 });
	 },
	 minLength: 1
	 };
	 if (author) {
	 ar.position = {
	 my: "right top",
	 at: "right bottom",
	 collision: "none"
	 };
	 }
	 $this.catcomplete(ar);
	 });
	 }

	 // /search autocomplete
	 */

})(jQuery);


function myerror(str) {
	if ($('#myerror').length == 0) {
		$('body').prepend('<div id="myerror"></div>');
	}
	$('#myerror').append('<pre style="margin-left: 10px;">' + str + '</pre>');
}

$.fn.screenCenterAlign = function () {
	var top = ($(window).height() - this.outerHeight()) / 2 + $(window).scrollTop();
	var left = ($(document).width() - this.outerWidth()) / 2 + $(document).scrollLeft();
	top = top < 0 ? 0 : top;
	left = left < 0 ? 0 : left;
	this.css("position", "absolute");
	this.css("top", top + "px");
	this.css("left", left + "px");
	return this
};

function centerMask() {
	$('.mask.div').screenCenterAlign();
	var maskHeight = $(document).height();
	var maskWidth = $(document).width();
	$('.mask.bg').css({'width': maskWidth, 'height': maskHeight});
}

/** Функция, аналогичная php функции inArray **/
/*
 inArray = Array.prototype.indexOf ?
 function (arr, val) {
 return arr.indexOf(val) != -1
 } :
 function (arr, val) {
 var i = arr.length;
 while (i--) {
 if (arr[i] === val) return true
 }
 return false
 };
 */
/** /Функция, аналогичная php функции inArray **/


/** Изменение строки даты из вида "2013-04-15" в вид "15.04.2013" **/
/*
 function makeCalDate(date) {
 var d = date.getDate().toString();
 var m = 1 + date.getMonth();
 var y = date.getFullYear().toString();
 if (d.length < 2) {
 d = "0" + d;
 }
 m = m.toString();
 if (m.length < 2) {
 m = "0" + m;
 }

 var Date2 = d + "." + m + "." + y;

 return Date2;
 }
 */
/** /Изменение строки даты из вида "2013-04-15" в вид "15.04.2013" **/
