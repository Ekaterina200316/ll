<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'new_wp' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'JKHDIbhRp3JG_@&6W?vzGy9uQv]zl5D,d*:W a4I5&%AvE=5H>Z21&fI>P9m8Evx' );
define( 'SECURE_AUTH_KEY',  'b,~,a#_4qnw.`gUS+d2{Ri3I@F=NG;J&/dI$e;.]3p4Su6HzB`F$|Mqy7|F_9}m9' );
define( 'LOGGED_IN_KEY',    '5uEvMa.%e4?^O0,m;FDj<m0$W6HSA&fj/d|>o2G#<#Zuv3*ArD,Dn!,L@sY7f^xU' );
define( 'NONCE_KEY',        '}Nh{Cocjg?7?<LcQS2YToPBn%HPFQHksdQv~IZfoh)]?$uy!UM8U(a[+<UqWi=7)' );
define( 'AUTH_SALT',        'h1TTv~Y/mD]7UPaiX%zbJ W([(!;fykU1<j@G}yMFLqaFv&gp/sAP<XSF4iL^Vz7' );
define( 'SECURE_AUTH_SALT', 'flzX]34t:-+)DbaCPH.PgT%! b/%UXSwn#gMfsTl93jFe$Ws(%;RPCH@jdJ299I ' );
define( 'LOGGED_IN_SALT',   '!(jvvjD+j3bHRi|njQ&h!$afk^k4^CMMpLs#:0 zvU#ifr]f/$}D=9G4x#d9VCVI' );
define( 'NONCE_SALT',       ';As!Ws.i!VdBSy93VeaN72bIFGsa;e. V-A3^x}p=UVH6JjQ.|;}qekQyVHX=44(' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
