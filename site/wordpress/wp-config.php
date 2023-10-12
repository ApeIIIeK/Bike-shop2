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
 * * Настройки базы данных
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
define( 'DB_NAME', 'netshop' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'Cyxapb' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'Oracle2004' );

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
define( 'AUTH_KEY',         '[.lg(A&GZ{WNV@lj1:qfsV_%5~!(Xpwb~87fdd0YUXi8}&6b6%D[#M~Z3g_wVC>A' );
define( 'SECURE_AUTH_KEY',  ')Q&@sZrJapqvR?3<$OIHqH)#B=SiuFd(n;H&2d4YzL3>2=1u<~<sl24b|hT|ksOn' );
define( 'LOGGED_IN_KEY',    '$pkSG`.L+<6e;^_cr2Bv9nG>pRNiBu)Pno~}W~4ak,2+![wX8`KN.fch3ga<NgJG' );
define( 'NONCE_KEY',        '-lX?C~vic$]}gwL@7c5wN<E[IqU^dlU&++h$Q;Q 3j,>o al_aF[OBzm;{+_o+:<' );
define( 'AUTH_SALT',        'A#:}W13a?1x;KV6!5tpS(8[+=zT3KQG2l;.;H0 hG<+ %j`~mD0_;efustZslMeH' );
define( 'SECURE_AUTH_SALT', 'XGgX}5g#gy`Uk8RP`fLh;v,+FIZ0Yu8h${8 Ae0F0rky8*j9dvkz+I`Ol9=*D7yh' );
define( 'LOGGED_IN_SALT',   'cWs+xaw.Im)^Ma_H(I)[n%hEW?@5P7Beo: o>A/.@yIaj?C 1X&`]p=yLSJ{XtVU' );
define( 'NONCE_SALT',       '1i5akOKEuj&:Youecy2}@3(qhF&Fl%DzZ]jd;SO!sT@Q?11.4?V;6IGT}^aM`5[Q' );

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
