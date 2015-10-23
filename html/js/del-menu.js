(function ($) {
	$(document).ready(function () {
		var arMenu = Array(
			{
				name: 'Рабочий стол',
				fileName: 'desktop.php'
			}/*,
			{
				name: 'Главная',
				fileName: 'index.php'
			},
			{
				name: 'Главная 2',
				fileName: '.php'
			},
			{
				name: 'Управление профилем',
				fileName: 'profile.php'
			},
			{
				name: 'Настройка профиля',
				fileName: 'profile-settings.php'
			},
			{
				name: 'Настройка стилей документации',
				fileName: 'doc-styles-settings.php'
			},
			{
				name: 'Тарифы и цены',
				fileName: 'tariffs.php'
			},
			{
				name: 'Настройка оформления: Приказы/Распоряжения',
				fileName: '.php'
			},
			{
				name: 'Настройка оформления: Положения/Политики/Акты',
				fileName: '.php'
			},
			{
				name: 'Стать партнёром',
				fileName: '.php'
			},
			{
				name: 'Вопросы эксперту 1',
				fileName: '.php'
			},
			{
				name: 'Вопросы эксперту 2',
				fileName: '.php'
			},
			{
				name: 'Текущие документы',
				fileName: '.php'
			},
			{
				name: 'Шаги: Шаг 1',
				fileName: 'step-1.php'
			},
			{
				name: 'Шаги: Шаг 2',
				fileName: 'step-2.php'
			},
			{
				name: 'Шаги: Шаг 3',
				fileName: 'step-3.php'
			},
			{
				name: 'Шаги: Шаг 4',
				fileName: 'step-4.php'
			},
			{
				name: 'Шаги: Шаг 5',
				fileName: 'step-5.php'
			},
			{
				name: 'Шаги: Шаг 6',
				fileName: 'step-6.php'
			},
			{
				name: 'Сведения конфиденциального характера',
				fileName: '.php'
			},
			{
				name: 'Меню: Меню 1',
				fileName: 'menu-1.php'
			},
			{
				name: 'Меню: Меню 2',
				fileName: 'menu-2.php'
			},
			{
				name: 'Меню: Меню 3',
				fileName: 'menu-3.php'
			},
			{
				name: 'Меню: Меню 4',
				fileName: 'menu-4.php'
			},
			{
				name: 'Документооборот',
				fileName: '.php'
			},
			{
				name: 'Технические и эксплуатационные характеристики ИСПДн',
				fileName: '.php'
			},
			{
				name: 'Общие сведения: Об организации',
				fileName: '.php'
			}*/,
			{
				name: 'Общие сведения: Структура подразделений',
				fileName: 'info-ou-structure.php'
			}/*,
			{
				name: 'Общие сведения: Список должностей',
				fileName: '.php'
			},
			{
				name: 'Общие сведения: Список сотрудников',
				fileName: '.php'
			},
			{
				name: 'Общие сведения: Список помещений',
				fileName: '.php'
			},
			{
				name: 'Общие сведения: О руководителе',
				fileName: '.php'
			},
			{
				name: 'Общие сведения: О руководителе (уменьшенные вопросы)',
				fileName: '.php'
			},
			{
				name: 'Формирование технического решения',
				fileName: '.php'
			},
			{
				name: 'Уведомление об обработке персональных данных',
				fileName: '.php'
			},
			{
				name: 'Организация: Ответственные лица',
				fileName: '.php'
			},
			{
				name: 'Организация: Ответственные отделы',
				fileName: '.php'
			},
			{
				name: 'Ответственные лица, комиссия',
				fileName: '.php'
			},
			{
				name: 'Общая статистика по подведомственным организациям',
				fileName: '.php'
			},



			{
				name: 'Окно: Введите логин и пароль',
				fileName: '#',
				click: "javascript: $('.mask.win2').show(); return false;"
			},
			{
				name: 'Окно: Регистрация',
				fileName: '#',
				click: "javascript: $('.mask.win2').show(); return false;"
			},
			{
				name: 'Окно: Без названия 1',
				fileName: '#',
				click: "javascript: $('.mask.win2').show(); return false;"
			},
			{
				name: 'Окно: Без названия 2',
				fileName: '#',
				click: "javascript: $('.mask.win2').show(); return false;"
			},
			{
				name: 'Окно: Выбор шапки документов',
				fileName: '#',
				click: "javascript: $('.mask.win2').show(); return false;"
			},
			{
				name: 'Окно: Заявка на повторное формирование документов',
				fileName: '#',
				click: "javascript: $('.mask.win2').show(); return false;"
			},
			{
				name: 'Окно: Информация о разделе «Оперативные мероприятия»',
				fileName: '#',
				click: "javascript: $('.mask.win2').show(); return false;"
			},
			{
				name: 'Окно: Падежные формы',
				fileName: '#',
				click: "javascript: $('.mask.win2').show(); return false;"
			}*/
		);
		console.log(arMenu)
		if (arMenu.length > 1) {
			$('body').append('<div class="del-menu"><span>Страницы:</span></div>');
			var currentFileName = '/';
			var href = location.href.match(/([^\/]+\.(html|php)|\/$)/);
			var queryString = location.href.match(/\?(.+)$/);
			if (queryString && queryString.length) {
				queryString = queryString[0];
			}
			if (href) {
				currentFileName = href[0];
			}
			if (currentFileName == '/') {
				currentFileName = arMenu[0]['fileName'];
			}
			for (i in arMenu) {
				$('.del-menu').append('<a href="' + arMenu[i]['fileName'] + '"' + (currentFileName == arMenu[i]['fileName'] || currentFileName + queryString == arMenu[i]['fileName'] || queryString == arMenu[i]['fileName'] ? ' class="current"' : '') + (arMenu[i]['click'] ? ' onclick="' + arMenu[i]['click'] + '"' : '') + '>' + arMenu[i]['name'] + '</a>');
			}
			$('.del-menu').css({
				position: 'absolute',
				'z-index': 100000,
				cursor: 'move',
				top: 0,
				right: 0,
				width: '235px',
				'margin-top': '141px', // 131px
				padding: '11px',
				border: '1px solid #999',
				// background: 'rgba(255,111,67,0.6)' // orange
				background: 'rgba(0,0,0,0.6)' // black
			}).find('span').css({
				display: 'block',
				'font-weight': 'bold',
				color: '#fff',
				'margin-bottom': '7px'
			}).parent().find('a:link, a:visited').css({
				display: 'block',
				color: '#fff',
				'font-size': '13px',
				padding: '3px 5px 3px 10px'
			}).parents('.del-menu').find('a.current:link, a.current:visited').css({
				background: 'rgba(0,161,230,0.75)'
			});
			$('.del-menu').on('dblclick', function(){
				$(this).hide();
			});
			$('.del-menu').draggable({
				create: function (event, ui) {
					var top = _getCookie('del-menu-top');
					var left = _getCookie('del-menu-left');
					if (top) {
						$('.del-menu').css({top: top + 'px'});
					}
					if (left) {
						//$('.del-menu').css({left: left + 'px'});
					}
				},
				start: function (event, ui) {
				},
				stop: function (event, ui) {
				},
				drag: function (event, ui) {
					var nSeconds = 1 * 60 * 60 * 2;
					_setCookie('del-menu-top', ui.position.top, nSeconds);
					_setCookie('del-menu-left', ui.position.left, nSeconds);
				}
			});
		}
	});
})(jQuery);

function _getCookie(cookieName) {
	var theCookie = '' + document.cookie;
	var ind = theCookie.indexOf(cookieName);
	var ind1 = theCookie.indexOf(';', ind);
	if (ind1 == -1) ind1 = theCookie.length;

	if (ind == -1 || cookieName == '') return '';

	return unescape(theCookie.substring(ind + cookieName.length + 1, ind1));
}

function _setCookie(cookieName, cookieValue, nSeconds) {
	var today = new Date();
	var expire = new Date();

	if (nSeconds == null || nSeconds == 0) nSeconds = 3600 * 24;

	expire.setTime(today.getTime() + nSeconds * 1000);

	document.cookie = cookieName + '=' + escape(cookieValue) + ';expires=' + expire.toGMTString();
}