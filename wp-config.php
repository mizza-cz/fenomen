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
define( 'DB_NAME', 'fenomenvsetin_cz' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'fenomenvsetin_cz' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'yahKao4choh4Inai' );

/** Имя сервера MySQL */
define( 'DB_HOST', '10.0.0.5' );

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
define( 'AUTH_KEY',         '<Ro[4l&1(!xY6>BpYpXG8+5N9JZ=E/3Hn|o/()7KdZ[2D[*%;gE)tlDu4%q#1Byo' );
define( 'SECURE_AUTH_KEY',  'tj/k%%h%C/2yajkSd]t}T 6x<u22;XlJv(k.g@`?21d+=3-is>!,n(*=Qs8w@3_ ' );
define( 'LOGGED_IN_KEY',    'M@YA:~NADNA1~e,{yk;88Tk[t#GSEr|CX[6Q{d7Rs-HS&~o|:`Az_/ ,v[Q2SqR{' );
define( 'NONCE_KEY',        'D&.WBFOR|,w%KtADy/P/%&GO4W I;J*bd]SHxK=K0SP2XgfvDRl3Ed@xn<<4BwZj' );
define( 'AUTH_SALT',        'Z(*;O2CpEb,oU9m3R8~CqIP0OtljQW~m^#,Y$&_QL1v!$uQId;Vr=9[g(FL`~+wB' );
define( 'SECURE_AUTH_SALT', 'E+:$Ub2iJ^-Vn9]I:P<1qBgPeQ*jTi@O#1@I4+y=?f$#<$rXN-;;i;wFTlZ9{o>}' );
define( 'LOGGED_IN_SALT',   '0MSNI0tkiO<bbwqka{==cOq[N,pc0_+f}#+zea[=?L|s=!{.M_mR>B|[ogE=Tyj6' );
define( 'NONCE_SALT',       '-1DIs3Zp)p{DslSKCk.8BVvC#Ho=kC<YJcbPjoG6|$_#z+<Fi}4*qo;{Fg&Zj5uz' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
