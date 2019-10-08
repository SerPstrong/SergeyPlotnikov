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
define('DB_NAME', 'serpstrong_test-delegator24');

/** Имя пользователя MySQL */
define('DB_USER', 'serpstrong');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'Agttga1986.');

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
define('AUTH_KEY',         'lv:J?yJUgEDgr$$`}<eOmLY^/X4 8Dz?w .L:^~}A)+:`]tS(se<ZCh2N}|S7Gn@');
define('SECURE_AUTH_KEY',  '51t?o-!C~:wMr:%Bf%}FpY>tR6MFIGMg}kzsr$!wf?iI)V/k&WZZwNA3BP(&/*i&');
define('LOGGED_IN_KEY',    '.-4moPHx^F2tH/j]qzHKV0}t%/v2?E ]/2ZLg?aQ+v@>c j7Z5N=qg:v0N<vYs9a');
define('NONCE_KEY',        'kUP?Q<T#-+_#|=LRdy0wv dr(/-w*<F_S;(gtd$$evhbUhr{&FS/#ke7-3jwM6sG');
define('AUTH_SALT',        'yr.,8s}Iiz;~+qV-XhE%(6H/_uDW4UI80^xpVJ1=6[m%s6LNN]Q)8s-zv]%;E/Vw');
define('SECURE_AUTH_SALT', '(V1Do$a5<s6tp*ngpO8ynXT]/C=JtOkF7U_!xlj;V.6XpvB9x.YVN4S+Ht/3S8nn');
define('LOGGED_IN_SALT',   '%*Em,dM9,o9i3/Q@8Np?sULQsAs~F)?E0RSM|bOUmzxubqLg4ecfTesbdBB$#[~v');
define('NONCE_SALT',       '~iK0p<.~sjL|oO}c:-4Xzu&^>JJ&;n>WDINR7bSWmbyT<.,rwoT2<..ErFGt`^_q');

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
