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
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'wordpress' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '101005' );

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
define( 'AUTH_KEY',         'Jy<1q#@Ebl?OK_HbG>ZJ}m]:H.Ik1B?LlN|$ZzJhclBRTaL```ESRhP-V_)?kVR{' );
define( 'SECURE_AUTH_KEY',  'q->]%3Mj2}9n$RkdRWe(GRVUaa[f{xi>RthmDYKiY]M_=DjBi{eXT4wEx=6_Sw2#' );
define( 'LOGGED_IN_KEY',    '|i;dLM/pODW%k/XZ^$R~uCukjQHsyy`FGe(QZts,%E:t$gGxlj3#yZ?)c[7A+;2!' );
define( 'NONCE_KEY',        '|K;FCF3 *QxjFe-Iu@]9CjitdA]){|a2}uK4!$wz2WVW3<j09`UME[-vyOx`I_k]' );
define( 'AUTH_SALT',        '([.>* |$BOqJmI,{|AS;9C,FBd8d188vi_k{LDs-b+{G%%OVw+4gASxm|hI-sp~2' );
define( 'SECURE_AUTH_SALT', '.]Y07pBs`VwV?(TLUe3Vd>.3z|%L1^>7EA%LIdmRc3@/eX d0;RT9^]qF1!b.&@R' );
define( 'LOGGED_IN_SALT',   'l2U2TczR2peH6tYu{2Wucy{BWlFx+w]SDs,4ivgyQc8EvDncsNzj}fy}b/GuIz=_' );
define( 'NONCE_SALT',       '7M?5Sl`f-N.iVf.Wo)^=jr{QwwKFV]}bk`aBAo3X,p:>sFJD{FvVtK3&$ohF{[|[' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
