(function ($) {
	$(document).ready(function () {
		var arMenu = Array(
			{
				name: 'Главная',
				fileName: 'index.php'
			},
			{
				name: 'Рабочий стол',
				fileName: 'desktop.php'
			},
			{
				name: 'Управление профилем',
				fileName: 'profile-management.php'
			},
			{
				name: 'Ответственность',
				fileName: 'page-responsibility.php'
			},
			{
				name: 'Настройка профиля',
				fileName: 'page-profile-settings.php'
			}/*,
			 {
			 name: 'Настройка стилей документации',
			 fileName: 'doc-styles-settings.php'
			 }*/,
			{
				name: 'Тарифы и цены',
				fileName: 'page-tariffs.php'
			}/*,
			 {
			 name: 'Настройка оформления: Приказы/Распоряжения',
			 fileName: '.php'
			 },
			 {
			 name: 'Настройка оформления: Положения/Политики/Акты',
			 fileName: '.php'
			 },
			 {
			 name: 'Примеры ссылок на интерактивные карты',
			 fileName: 'link-on-maps.php'
			 },
			 {
			 name: 'Стать партнёром',
			 fileName: '.php'
			 }*/,
			{
				name: 'Вопросы эксперту',
				fileName: 'expert-questions.php'
			}/*,
			 {
			 name: 'Вопросы эксперту 2',
			 fileName: '.php'
			 }*/,
			{
				name: 'Текущие документы',
				fileName: 'page-current-documents.php'
			}/*,
			 {
			 name: 'Сведения конфиденциального характера',
			 fileName: '.php'
			 }*/,
			{
				name: 'Документооборот',
				fileName: 'document-management.php'
			}/*,
			 {
			 name: 'Технические и эксплуатационные характеристики ИСПДн',
			 fileName: '.php'
			 }*/,
			{
				name: 'Общие сведения: <br/>Об организации',
				fileName: 'info-about-organization.php'
			},
			{
				name: 'Общие сведения: <br/>Структура подразделений',
				fileName: 'info-ou-structure.php'
			},
			{
				name: 'Общие сведения: <br/>Список должностей',
				fileName: 'info-posts-list.php'
			},
			{
				name: 'Общие сведения: <br/>Список сотрудников',
				fileName: 'info-employees-list.php'
			},
			{
				name: 'Общие сведения: <br/>Список помещений',
				fileName: 'info-spaces.php'
			},
			{
				name: 'Общие сведения: <br/>О руководителе',
				fileName: 'info-about-head.php'
			},
			{
				name: 'Формирование технического решения',
				fileName: 'page-technical-solutions-formation.php'
			},
			{
				name: 'Уведомление об обработке персональных данных',
				fileName: 'page-personal-data-notice.php'
			},
			{
				name: 'Ответственные лица, комиссия',
				fileName: 'page-responsible-person.php'
			},
			{
				name: 'Организация: <br/>Ответственные лица',
				fileName: 'organization-responsible-person.php'
			},
			{
				name: 'Организация: <br/>Ответственные отделы',
				fileName: 'organization-responsible-departments.php'
			},
			{
				name: 'Общая статистика<!-- по подведомственным организациям-->',
				fileName: 'statistics-general.php'
			},
			{
				name: 'Контакты',
				fileName: 'page-contacts.php'
			},
			{
				name: 'Окно: Внимание!',
				fileName: '#',
				click: "",
				attrs: 'data-toggle="modal" data-target="#error-modal"'
			},
			{
				name: 'Окно: Информация о разделе',
				fileName: '#',
				click: "",
				attrs: 'data-toggle="modal" data-target="#info-section-modal"'
			},
			{
				name: 'Окно: Введите логин и пароль',
				fileName: '#',
				click: "",
				attrs: 'data-toggle="modal" data-target="#entry-modal"'
			},
			{
				name: 'Окно: Регистрация',
				fileName: '#',
				click: "",
				attrs: 'data-toggle="modal" data-target="#registration-modal"'
			},
			{
				name: 'Окно: Отправка вопроса',
				fileName: '#',
				click: "",
				attrs: 'data-toggle="modal" data-target="#feedback-modal"'
			},
			{
				name: 'Окно: Заявка на партнёрство',
				fileName: '#',
				click: "",
				attrs: 'data-toggle="modal" data-target="#partnership-modal"'
			},
			{
				name: 'Окно: Выбор шапки документов',
				fileName: '#',
				click: "",
				attrs: 'data-toggle="modal" data-target="#select-header-modal"'
			}/*,
			 {
			 name: 'Окно: Заявка на повторное формирование документов',
			 fileName: '#',
			 click: "javascript: $('.mask.win2').show(); return false;"
			 }*/,
			{
				name: 'Окно: Редактирование падежных форм',
				fileName: '#',
				click: "",
				attrs: 'data-toggle="modal" data-target="#edit-case-modal"'
			}
		);
		console.log(arMenu);
		var isShowNumbers = true; // показывать список с цифрами
		if (arMenu.length > 1) {
			$('body').append('<style>.del-menu, .del-menu * {font-size: 13px; color: #fff !important;}</style>');
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
			var menuPointsStr = '';
			var fontSize = '13px';
			for (var i in arMenu) {
				menuPointsStr += '<li><a href="' + arMenu[i]['fileName'] + '"' + (currentFileName == arMenu[i]['fileName'] || currentFileName + queryString == arMenu[i]['fileName'] || queryString == arMenu[i]['fileName'] ? ' class="current"' : '') + (arMenu[i]['click'] ? ' onclick="' + arMenu[i]['click'] + '"' : '') + (arMenu[i]['attrs'] ? ' ' + arMenu[i]['attrs'] + ' ' : '') + '>' + arMenu[i]['name'] + '</a></li>';
			}
			$('.del-menu').append('<ol' + (isShowNumbers ? ' type="1" start="1" style="list-style: decimal; padding-left: 25px;"' : '') + '>' + menuPointsStr + '</ol>').css({
				position: 'absolute',
				'z-index': 100000,
				cursor: 'move',
				top: 0,
				right: 0,
				width: '235px',
				'margin-top': '49px', // 131px
				padding: '11px',
				border: '1px solid #999',
				// background: 'rgba(255,111,67,0.6)' // orange
				background: 'rgba(0,0,0,0.6)' // black
			}).find('span').css({
				display: 'block',
				'font-weight': 'bold',
				'margin-bottom': '7px'
			}).parent().find('a:link, a:visited').css({
				display: 'block',
				padding: '3px 5px 3px 10px'
			}).parents('.del-menu').find('a.current:link, a.current:visited').css({
				background: 'rgba(0,161,230,0.75)'
			});
			$('.del-menu').on('dblclick', function () {
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