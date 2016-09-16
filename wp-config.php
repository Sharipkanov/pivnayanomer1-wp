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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'pivnayanomer1');

/** Имя пользователя MySQL */
define('DB_USER', 'sharipkanov');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'zznkmdie21');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|{LF`X/CF$0,TqzW~AQ!0*/RS5V2@S>usx7>R_&{!_2]vS:^$!@/0KJ|mo%:/F;u');
define('SECURE_AUTH_KEY',  'ohI=sfL-`0~<y/:zNntRSRR.kj2@5:BS/WK71oY,6ccpkRwk&/M?2-@&T},cBnf(');
define('LOGGED_IN_KEY',    'SL>^g$hiWV`]IJ~_72(4%}lJa{GeA{5oK.Y2<`NrqDFX%Ma< wq NL[Waci8/h!D');
define('NONCE_KEY',        'tZU +|F@ PP(A~[`)-nJ3d13cxMn?2)OaD{q!l1T9vi:_sPO)$o*$75a<I9r<wLk');
define('AUTH_SALT',        'duTg|mA9>kXcS}gnJRA6mVCm~ ?u~b3j=Sj|?51L)1`y7O*[ +o}S0b0*:ugM~FU');
define('SECURE_AUTH_SALT', 'z/r<p`^~!Zf!R]TkNyUA~VAW mu@I>[gShBj$$qq(~0`V79!eVOPy9{0l+b;NmUe');
define('LOGGED_IN_SALT',   '8:s}->3.}[BA-kQic4y*yg3!zYcINg&t>p==#}y<*fK2( 6v|&uS~cru)rJD=24~');
define('NONCE_SALT',       ']>Q51ldXyd@B9)y_]a/[>Tu[:|~M}RXUvutv`@,BffrHS:?jOpjaooWM,P7{Mj^6');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
