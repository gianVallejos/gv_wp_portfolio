<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define( 'DB_NAME', 'gv_wp_portfolio' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', '' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'dR;nlJ4w`^6MH?_$YR)[ed_L!MiB8pq:WTJe~vLJ,ZqP.xYCy*rq}mvk!M7v`dUQ' );
define( 'SECURE_AUTH_KEY', 'q-{|]GE7o3k!*nyK[Vh37kH&$sOlx;X};xHJi,gryWj|5M^jCfM*tdL/,y&]wP;+' );
define( 'LOGGED_IN_KEY', 'NeQc$k@&f(8$`!c]`]@co}cq$ [B&]rCYE/3eA*w*03~^Bg1K3UQ(lIMx_GxQU8N' );
define( 'NONCE_KEY', 'H)2Y7C-h|K0z_RZNX!~a!buJ_j-)R]jPOCsKaF|Y#Kf0 1.&0utXj I.n3/tD*tS' );
define( 'AUTH_SALT', 'v6sH58U]vY[fHr}P8<IA=.xsiRl[hCW5Eb!3!XlgwcgRI4Qb5!*`8;+Tr+_CGdfI' );
define( 'SECURE_AUTH_SALT', 'n]A m~k@u+tegw.bQPSZ6Rmcwr@EZ%f VfoQJAj~0TKq[oqt!k7l9_6,ih}SaTC7' );
define( 'LOGGED_IN_SALT', 'QHGm82P,Kj+Wt5bNL)2<.tRfL3J0~^aRa?PC<MmJ)/V1OzZ0?r}ARAefj=q.pFI(' );
define( 'NONCE_SALT', 'fv1OjL;(;6#S)ab9,E![FS(Bpzegmnw3p>xg7@cX%+bseJxQcZ&|,]j~<,^>EF5)' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'w752p_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

