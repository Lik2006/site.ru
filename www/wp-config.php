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
define('REVISR_GIT_PATH', ''); // Added by Revisr
define('DB_NAME', 'admin');

/** Имя пользователя MySQL */
define('DB_USER', 'admin');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '123456');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '%xM23Op=lXPr/@T`C(w_ufm`J-avus(dtc&$M=I/]<>R4BwG$gMpzRng:HVuSni5');
define('SECURE_AUTH_KEY',  'K`q(Q$#|Rqnxv@9b}C}1:n0x<m:1Y`dZAZAIp3FJMV+q{nEk/kM |_h7pl]ga.^o');
define('LOGGED_IN_KEY',    '+za)t{)=R[M>39+oc**fex!<PpS-|{E,:Y46EEc=h{Q8xGdZM_~TtSS-vVu=7s~q');
define('NONCE_KEY',        '}K-._~ERi^~l+LBh+hG-dfNvEiZw|n-lgg}~`t7GCkmzN6_R a9:Q-UcQr(+18))');
define('AUTH_SALT',        '5kOB*iUKylM-/2J#3 }G}f=V$ 1qN._xVOVqHs@oJp$uN2r8#!S@T|;Q,W7<sy|G');
define('SECURE_AUTH_SALT', 'itx`hQV}g^xQX&/ (Pn97 WU$yff_$K/A4T@3X%`|H4CBY42J?F]:a1-`NpiVm:=');
define('LOGGED_IN_SALT',   'msnr4^f9_-J}eo:+~q|C|jRzo9Zy(!U2p=4%)Vfi:X+,oLxIb1zfYq30p&1qR!r=');
define('NONCE_SALT',       'Uq]gkl|(Iqn M3:E.-s=12;LjOs-mV-Gba.ZTYO1`9,$>k5W2Kxr@RwP6^I itBc');

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
