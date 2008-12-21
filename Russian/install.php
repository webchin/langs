<?php

// Language definitions used in install.php
$lang_install = array(

// Install Form
'Install PunBB'			=>	'Установка PunBB %s',
'Choose language'            =>    'Измените языковые установки',
'Choose language help'        =>    'Выберите языковой пакет для следования инструкциям по установке на знакомом языке. Для этого выберите нужный язык из списка.',
'Installer language'        =>    'Язык установки:',
'Choose language legend'    =>    'Язык установки',
'Install intro'				=>	'Для установки PunBB вы должны заполнить форму ниже. Пожалуйста, читайте инструкции и пояснения перед заполнением полей. Если вы столкнулись с трудностями во время установки, пожалуйста, обратитесь к документации, входящей в состав установочного пакета PunBB.',
'Choose language'			=>	'Выберите язык',
'Installer language'			=>	'Выберите язык установки',
'Default language'			=>	'Язык по умолчанию',
'Default language help'		=>	'Выберите язык форума по умолчанию',
'Choose language help'		=>	'Выберите язык, на котором будет происходить установка форума',
'Part1'						=>	'Часть 1 — Параметры Базы Данных',
'Part1 intro'				=>	'Пожалуйста, введите требуемую информацию, для настройки параметров своей БД для PunBB. Вы должны точно узнать и указать всю эту информацию, прежде чем продолжать установку. Пояснения к полям этой формы даны ниже.',
'Database type'				=>	'Тип БД:',
'Database name'				=>	'Имя БД:',
'Database server'			=>	'Сервер БД:',
'Database username'			=>	'Имя пользователя БД:',
'Database password'			=>	'Пароль БД:',
'Database user pass'		=>	'Имя пользователя и пароль пользвателя БД:',
'Table prefix'				=>	'Префикс таблиц:',
'Database type info'		=>	'На текущий момент PunBB поддерживает MySQL, PostgreSQL и SQLite. Если ваш тип БД отсутствует в выпадающем меню, это означает, что PHP не поддерживает осбобенности вашей БД. Больше информации по типам БД и их поддержке вы сможете найти в FAQ.',
'Mysql type info'			=>	'PunBB определил, что ваша сборка PHP поддерживает два разных способа связи с MySQL. По способу «<em>стандарт</em>» и «<em>улучшенный</em>». Если вы не уверены, какой из способов выбрать, попробуйте начать с улучшенного, если же он будет работать некорректно - оставьте стандартный.',
'MySQL InnoDB info'			=>	'PunBB определил, что ваш MySQL сервер, возможно, поддерживает <a href="http://dev.mysql.com/doc/refman/5.0/en/innodb-overview.html">InnoDB</a>. Это было бы хорошим выбором, если вы планируете создание большого форума. Если вы не уверенны, не рекомендуется использовать InnoDB.',
'Database server info'		=>	'Введите адрес сервера БД (например: <em>localhost</em>, <em>mysql1.example.com</em> или <em>208.77.188.166</em>). Вы можете назначить свой номер порта, если ваша БД недоступна по первоначальному номеру (например: <em>localhost:3580</em>). Для SQLite введите что угодно или оставьте \'localhost\'.',
'Database name info'		=>	'Введите имя БД, в связке с которой будет установлен PunBB. Эта БД уже должна существовать. Для SQLite это относительный путь до файла БД. Если файл БД SQLite не существует, PunBB попытается его создать.',
'Database username info'	=>	'Введите имя пользователя и пароль, используемые для связи с выбранной БД. Для SQLite данный параметр не трубуется.',
'Table prefix info'			=>	'Опционально — введите префикс для таблиц БД. Определив префикс вы сможете использовать несколько копий PunBB с одной БД (например: <em>foo_</em>).',
'Part1 legend'				=>	'Информация о БД',
'Database type help'		=>	'Выберите тип БД.',
'Database server help'		=>	'Адрес сервера БД. Для SQLite введите что угодно.',
'Database name help'		=>	'Существующая БД, в которую будет установлен PunBB.',
'Database username help'	=>	'Для соединения с БД. Для SQLite не требуется.',
'Database password help'	=>	'Для соединения с БД. Для SQLite не требуется.',
'Table prefix help'			=>	'Необязательный префикс БД, например «foo_».',
'Part2'						=>	'Часть 2 — Настройка Администратора форума',
'Part2 legend'				=>	'Параметры Администратора',
'Part2 intro'				=>	'Пожалуйста, введите требуемую информацию для настройки параметров администратора этого форума. Позже вы сможете создать больше администраторов и модераторов.',
'Admin username'			=>	'Имя Администратора:',
'Admin password'			=>	'Пароль Администратора:',
'Admin confirm password'	=>	'Подтвердите пароль:',
'Admin e-mail'				=>	'E-mail адрес Администратора:',
'Username help'				=>	'От 2 до 25 символов.',
'Password help'				=>	'Минимум 4 символа. Чувствительно к регистру.',
'Confirm password help'		=>	'Повторите пароль.',
'E-mail address help'		=>	'Адрес E-mail Администратора.',
'Part3'						=>	'Часть 3 — Настройки форума',
'Part3 legend'				=>	'Информация форума',
'Part3 intro'				=>	'Пожалуйста, введите требуемую информацию. Обратите особое внимание на базовый URL и внимательно читайте пояснения ниже.',
'Board title'				=>	'Заголовок форума:',
'Board title and desc'		=>	'Заголовок форума и описание:',
'Board description'			=>	'Описание форума:',
'Base URL'					=>	'Базовый URL:',
'Board title info'			=>	'Введите заголовок и короткое описание вашего форума PunBB. Они будут отображаться вверху каждой страницы. Оставьте поля пустыми, чтобы использовать заголовок и описание по умолчанию. Их можно будет изменить позже.',
'Base URL info'				=>	'Пожалуйста, обратите особое внимание на параметр «базовый URL». Вы должны правильно ввести его иначе ваш форум будет работать некорректно. Бызовый URL — это URL (без закрывающего слеша) вашего форума PunBB (например: <em>http://forum.example.com</em> или <em>http://example.com/~myuser</em>). Имейте ввиду, изначально прописанное в этом поле значение — просто догадка PunBB.',
'Base URL help'				=>	'URL (без закрывающего слеша) вашего форума PunBB. Подробнее читайте выше.',
'Pun repository'			=>	'Репозитарий',
'Pun repository help'		=>	'Установка расширений из репозитария (загрузчик расширений «в один клик») после установки форума.',
'Start install'				=>	'Начать установку', // Label for submit button
'Required'					=>	'(Обязательно)',
'Required warn'				=>	'Все поля, помеченные %s, должны быть заполнены перед продолжением.',

// Install errors
'No database support'		=>	'Ваша сборка PHP не поддерживает БД, которые поддерживает PunBB. Необходима поддержка хотя бы одной - MySQL, PostgreSQL или SQLite для продолжения установки.',
'Missing database name'		=>	'Вы должны ввести имя БД. Пожалуйста, вернитесь и исправьте ошибку.',
'Username too long'			=>	'Имена пользователей не могут быть длинее 25 символов. Пожалуйста, вернитесь и исправьте ошибку.',
'Username too short'		=>	'Имена пользователей должны иметь длину не менее 2-х символов. Пожалуйста, вернитесь и исправьте ошибку.',
'Pass too short'			=>	'Пароли должны иметь длину не менее 4-х символов. Пожалуйста, вернитесь и исправьте ошибку.',
'Pass not match'			=>	'Пароли не совпадают. Пожалуйста, вернитесь и исправьте ошибку.',
'Username guest'			=>	'Имя пользователя guest (гость) зарезервировано. Пожалуйста, вернитесь и исправьте ошибку.',
'Username BBCode'			=>	'Имена пользователей не могут содержать никаких тегов форматирования текста (BB-кодов), которые используются на форуме. Пожалуйста, вернитесь и исправьте ошибку.',
'Username reserved chars'	=>	'Имена пользователей не могут содержать символы \', " и [ или ] одновременно. Пожалуйста, вернитесь и исправьте ошибку.',
'Username IP'				=>	'Имена пользователей не могут быть записаны в форме IP адреса. Пожалуйста, вернитесь и исправьте ошибку.',
'Invalid email'				=>	'Введенный e-mail адрес Администратора не верен. Пожалуйста, вернитесь и исправьте ошибку.',
'Missing base url'			=>	'Вы должны указать базовый URL. Пожалуйста, вернитесь и исправьте ошибку.',
'No such database type'		=>	'\'%s\' не верный тип БД.',
'Invalid MySQL version'		=>	'Ваша версия MySQL — %1$s. Минимальные требования для корректной работы PunBB — MySQL %2$s. Вы должны обновить MySQL прежде, чем продолжать установку.',
'Invalid table prefix'		=>	'Префикс \'%s\' содержит недопустимые символы или слишком длинный. Префикс может содержать буквы от a до z, любые цифры и символ подчеркивания. Однако, он не должен начинаться с цифры. Максимальная длина — 40 символов. Пожалуйста, укажите другой префикс.',
'SQLite prefix collision'	=>	'Префикс \'sqlite_\' зарезервирован для использования ядром SQLite. Пожалуйста, укажите другой префикс.',
'PunBB already installed'	=>	'Таблица «%1$susers» уже существует в БД «%2$s». Это может означать, что PunBB уже установлен или установленно какое-то другое ПО, использующее одну или несколько таблиц, необходимых для работы PunBB. Если вы хотите установить несколько копий PunBB в одну БД, вы должны указать другой префикс.',
'InnoDB not enabled'		=>	'InnoDB не включена. Пожалуйста, выберите БД, которая не поддерживает InnoDB, или включите InnoDB в настройках вашего MySQL-сервера.',

// Used in the install
'Default announce heading'	=>	'Пример объявления',
'Default announce message'	=>	'<p>Введите текст вашего объявления здесь.</p>',
'Default maint message'		=>	"Форум временно закрыт на профилактику. Пожалуйста, попробуйте зайти снова через несколько минут.<br />\\n<br />\\n/Администратор",
'Default rules'				=>	'Введите правила здесь.',
'Default category name'		=>	'Тестовая категория',
'Default forum name'		=>	'Тестовый раздел',
'Default forum descrip'		=>	'Это просто тестовый раздел',
'Default topic subject'		=>	'Тестовый пост',
'Default post contents'		=>	'Если вы видите это сообщение (а я думаю, вы его видите), значит установка PunBB прошла успешно! Теперь авторизируйтесь, заходите в административную панель и конфигурируйте свой форум.',
'Default rank 1'			=>	'Новый участник',
'Default rank 2'			=>	'Участник',


// Installation completed form
'Success description'		=>	'Поздравляем! PunBB %s был успешно установлен.',
'Success welcome'			=>	'Пожалуйста, следуйте нижеприведенным инструкциям, чтобы закончить установку.',
'Final instructions'		=>	'Последние инструкции',
'No write info 1'			=>	'Важно! Для завершения установки вам необходимо нажать на кнопку, расположенную ниже, чтобы скачать файл под именем config.php. Затем вам нужно загрузить этот файл в корневую директорию вашего форума PunBB.',
'No write info 2'			=>	'Как только вы загрузите в корневую директорию файл config.php, PunBB будет полностью установлен! Как только файл будет загружен, вы можете перейти %s.',
'Go to index'				=>	'перейти к главной странице форума',
'Warning'					=>	'Внимание!',
'No cache write'			=>	'<strong>Каталог cache не доступен для записи!</strong> Для корректной работы PunBB, каталог под названием <em>cache</em> должен быть доступен для записи. Используйте chmod чтобы задать права доступа для каталога. Если сомневаетесь, установите chmod на 0777.',
'No avatar write'			=>	'<strong>Каталог avatar не доступен для записи!</strong> Если вы хотите, чтобы пользователи могли загружать собственные аватары, вы должны убедиться, что каталог под названием <em>img/avatars</em> доступен для записи. Позже вы сможете указать другую папку для хранения аватар (смотрите Администрирование/Настройки/Дополнтельные возможности). Используйте chmod чтобы задать права доступа для каталога. Если сомневаетесь, установите chmod на 0777.',
'File upload alert'			=>	'<strong>Загрузка файлов не разрешена на этом сервере!</strong> Если вы хотите, чтобы пользователи могли загружать собственные аватары вы должны включить параметр file_uploads в настройках PHP. Как только загрузка файлов будет разрешена, загрузка аватаров может быть включена в настройках Администрирование/Настройки/Дополнтельные возможности.',
'Download config'			=>	'Скачать файл config.php', // Label for submit button
'Write info'				=>	'PunBB был полностью установлен! Теперь вы можете %s.',
);
