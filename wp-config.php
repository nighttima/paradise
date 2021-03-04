<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
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

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'task3_db' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'q@?w 45TYLqBxc%;r1eDJ;bhGN?F,5}L;Q[vb;ie.M&5}E& @0SVk},xLBoF{}s&' );
define( 'SECURE_AUTH_KEY',  'n=6JR*!(X+#Ha[Adh8kYloP&2{5]>29VRSoLdyih9{wkE/XnJDw#Oyz9xo:Dx+qP' );
define( 'LOGGED_IN_KEY',    '84^]}M0%&~Y}{kP{QVX<?ldnrqMpQw}UC0#@Q/i-FS<CC|L8SJ@6K&ldJT~kj-Nt' );
define( 'NONCE_KEY',        'ci1-~&ha~`ayiXHWWe#8aEHkPLr]esg ?`NnHc;^5G=63O8kbN]~. p!;psAt7(k' );
define( 'AUTH_SALT',        '*U!6CiaLK[TB |fZTvf/GhX|>SZHjG,MnY?Yl3Qnc}|8!fWrpAE0$l*K23H4$ht4' );
define( 'SECURE_AUTH_SALT', ']lSN@iigZ8bg?E|a/roky`$}%oB=$=b!DP@zH795=`f#Rfw-Q)Dtn+UC)W5%&fQ%' );
define( 'LOGGED_IN_SALT',   'X:1F1~p7*ZT&DU_N)59^W^E4[X{U8f7HQQo8Uc=eBT(YDHcD uHV^Q,P_Iu;N;}D' );
define( 'NONCE_SALT',       'MRRgMd_D :6lOQ~Lz?WW[Xr|i1%4GyJQ4`=$s[2&I0hM Pk;ooOlNB!?%<0%0;x(' );

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
define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] );
define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] );
/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
