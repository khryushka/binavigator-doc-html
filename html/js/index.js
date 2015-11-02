(function ($) {
	$(document).ready(function () {
		/**  hr **/
		$('hr').each(function () {
			$(this).replaceWith('<div style="clear: both; overflow: hidden;"><div class="hr' + (this.className ? ' ' + this.className : '') + '"><div></div></div></div>')
		});
		/**  /hr **/

		/** CirbularProgressBar **/
		$(".circularbar").knob({
			change: function (value) {
				//console.log("change : " + value);
			},
			release: function (value) {
				//console.log(this.$.attr('value'));
				console.log("release : " + value);
			},
			cancel: function () {
				console.log("cancel : ", this);
			},
			format: function (value) {
				return value + ' %';
			},
			draw: function () {

				// "tron" case
				if (this.$.data('skin') == 'tron') {

					this.cursorExt = 0.3;

					var a = this.arc(this.cv)  // Arc
						, pa                   // Previous arc
						, r = 1;

					this.g.lineWidth = this.lineWidth;

					if (this.o.displayPrevious) {
						pa = this.arc(this.v);
						this.g.beginPath();
						this.g.strokeStyle = this.pColor;
						this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, pa.s, pa.e, pa.d);
						this.g.stroke();
					}

					this.g.beginPath();
					this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
					this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, a.s, a.e, a.d);
					this.g.stroke();

					this.g.lineWidth = 1;
					this.g.beginPath();
					this.g.strokeStyle = this.h2rgba(this.o.fgColor, "0.2");
					this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
					this.g.stroke();

					return false;
				}
			},
			font: 'Ubuntu Light'
		});
		/** /CirbularProgressBar **/

		/** BigSlider **/
		$('.owl-carousel').owlCarousel({
			loop: true,
			margin: 0,
			responsiveClass: true,
			autoplay: true,
			autoplayTimeout: 3000,
			stopOnHover: true,
			transitionStyle: 'fade',
			transition: 'fade',
			easing: 'fade',

			responsive: {
				0: {
					items: 1,
					nav: true,
					fallbackEasing: 'linear'
				}
				/*,
				 600: {
				 items: 3,
				 nav: false
				 },
				 1000: {
				 items: 5,
				 nav: true,
				 loop: false,
				 margin: 20
				 }
				 */
			}
		});
		/** /BigSlider **/

		/** FormStyler **/
		$('.middle-block input[type=checkbox], .middle-block input[type=radio], .middle-block select, .modal input[type=checkbox], .modal input[type=radio], .modal select').styler({
			selectSearch: true
		});
		/** /FormStyler **/

		/** Tooltip **/
		$('.middle-block [title]').tooltip();
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


		/** чекбокс "не склонять" **/
		$('input.to-link-case-forms').each(function (i) {
			var $this = $(this);
			$this.on('change', function () {
				var link = $('.link-case-forms').eq(i);

				if ($this.prop("checked")) {
					link.hide();
				}
				else {
					link.show();
				}
			})
		});
		/** /чекбокс "не склонять" **/


		/** DatePicker **/
		$.datepicker.regional['ru'] = {
			closeText: 'Закрыть',
			prevText: '<',
			nextText: '>',
			currentText: 'Сегодня',
			monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь',
				'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
			monthNamesShort: ['Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн',
				'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек'],
			dayNames: ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'],
			dayNamesShort: ['вск', 'пнд', 'втр', 'срд', 'чтв', 'птн', 'сбт'],
			dayNamesMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
			weekHeader: 'Не',
			dateFormat: 'dd.mm.yy',
			firstDay: 1,
			isRTL: false,
			showMonthAfterYear: false,
			//numberOfMonths: 1,
			//showCurrentAtPos: 1,
			yearSuffix: ''
		};
		$.datepicker.setDefaults($.datepicker.regional['ru']);
		$(".datepicker").datepicker();
		/** /DatePicker **/


		/** FileUploadPlugin **/
		'use strict';

		// Initialize the jQuery File Upload widget:
		$('[id*="fileupload"]').each(function () {
			var $this = $(this);
			var fileTypes = [];
			var acceptFileTypes = '';
			var maxNumberOfFiles = parseInt($this.data('max-number-of-files')) ? $this.data('max-number-of-files') : 100;

			if ($this.hasClass('fileupload-images')) {
				fileTypes = ['png', 'jpg', 'jpeg', 'gif'];
			}
			if ($this.hasClass('fileupload-png')) {
				fileTypes.push('png');
			}
			if (fileTypes.length > 0) {
				acceptFileTypes = eval('\/(\\.|\\\/)(' + fileTypes.join('|') + ')$\/i');
			}

			$this.fileupload({
				// Uncomment the following to send cross-domain cookies:
				//xhrFields: {withCredentials: true},
				url: SITE_TEMPLATE_PATH + '/jquery-file-upload/server/php/',
				maxFileSize: 1024 * 1024,
				acceptFileTypes: acceptFileTypes,
				maxNumberOfFiles: maxNumberOfFiles,
				messages: {
					maxNumberOfFiles: 'Максимальное количество файлов превышено',
					acceptFileTypes: 'Тип файла не допускается',
					maxFileSize: 'Файл слишком большой',
					minFileSize: 'Файл слишком мал'
				}
			});
		});

		// Enable iframe cross-domain access via redirect option:
		/*
		 $('#fileupload').fileupload(
		 'option',
		 'redirect',
		 window.location.href.replace(
		 /\/[^\/]*$/,
		 '/cors/result.html?%s'
		 )
		 );
		 */
		/*
		 if (window.location.hostname === 'blueimp.github.io') {
		 // Demo settings:
		 $('#fileupload').fileupload('option', {
		 url: '//jquery-file-upload.appspot.com/',
		 // Enable image resizing, except for Android and Opera,
		 // which actually support image resizing, but fail to
		 // send Blob objects via XHR requests:
		 disableImageResize: /Android(?!.*Chrome)|Opera/
		 .test(window.navigator.userAgent),
		 maxFileSize: 999000,
		 acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i
		 });
		 // Upload server status check for browsers with CORS support:
		 if ($.support.cors) {
		 $.ajax({
		 url: '//jquery-file-upload.appspot.com/',
		 type: 'HEAD'
		 }).fail(function () {
		 $('<div class="alert alert-danger"/>')
		 .text('Upload server currently unavailable - ' +
		 new Date())
		 .appendTo('#fileupload');
		 });
		 }
		 } else {
		 // Load existing files:
		 $('#fileupload').addClass('fileupload-processing');
		 $.ajax({
		 // Uncomment the following to send cross-domain cookies:
		 //xhrFields: {withCredentials: true},
		 url: $('#fileupload').fileupload('option', 'url'),
		 dataType: 'json',
		 context: $('#fileupload')[0]
		 }).always(function () {
		 $(this).removeClass('fileupload-processing');
		 }).done(function (result) {
		 $(this).fileupload('option', 'done')
		 .call(this, $.Event('done'), {result: result});
		 });
		 }
		 */
		/** /FileUploadPlugin **/

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
			$("form:visible, .modal form").each(function () {
				var $form = $(this);
				if (!$form.attr('init')) {
					$form.attr('init', 1);

					$form.validationEngine('attach', {
						bindMethod: "live",
						promptPosition: "bottomLeft",
						scroll: false,
						onValidationComplete: function (form, status) {
							var $this = $(form);

							if (status) {

								// поля не заполенные и равные плейсхолдеру не отправляем ч.1
								/*
								 form.find('input').each(function () {
								 var $input = $(this);
								 if ($input.val() == $input.attr('rel')) {
								 $input.attr('placeholder', $input.attr('rel'));
								 $input.val('');
								 }
								 });
								 */
								// /поля не заполенные и равные плейсхолдеру не отправляем ч.1
								/*
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
								 */
								return true;
							}
						}
					});
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


		/** фокус на первый элемент при открытии формы **/
		$('.modal').on('show.bs.modal',
			function (e) {
				$('.modal').modal('hide');
			});
		$('.modal').on('shown.bs.modal',
			function (e) {
				var $this = $(this);
				$this.find('input[type=text],input[type=password],textarea').eq(0).focus();

				$this.find('input[type=checkbox], input[type=radio], select').styler({
					selectSearch: true
				});
			}
		);
		/** /фокус на первый элемент при открытии формы **/

		/** responsibility **/
		$('.li-block').each(function () {
			var $this = $(this);
			if ($this.data('container')) {
				$this.find('li').each(function (i) {
					var li = $(this);
					li.on('mouseover click', function () {
						$this.find('li').removeClass('active');
						$this.find('li').eq(i).addClass('active')
						$('.li-data').hide();
						$('.li-data').eq(i).show();
					});
				});
			}
		});
		/** /responsibility **/


		/** JqvMap **/
		var colorRegion = '#1076C8'; // Цвет всех регионов
		var focusRegion = '#FF9900'; // Цвет подсветки регионов при наведении на объекты из списка
		var selectRegion = '#0A4C82'; // Цвет изначально подсвеченных регионов

		var highlighted_states = {};

			$('#vmap').vectorMap({
				map: 'russia',
				backgroundColor: '#ffffff',
				borderColor: '#ffffff',
				borderWidth: 2,
				color: colorRegion,
				colors: highlighted_states,
				hoverOpacity: 0.7,
				enableZoom: true,
				showTooltip: true,

				// Клик по региону
				onRegionClick: function(element, code, region){
					$('#opener-regional-partner').trigger('click');
					$('.region-row').find('[name="region"]').val(region);
					//alert(region+' - ' +code);
				}
			});
		/** /JqvMap **/


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
