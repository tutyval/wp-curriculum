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
define('DB_NAME', 'curriculum');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', 'kNOuOqcRfAO<IDh?5o&R()!7:/3}EW?kBdmY[(;~i-Lf&#UsDzKywv,4<@+eTo X');
define('SECURE_AUTH_KEY', 'uuMJ,]9yJevm%9sBG0q}=)% b^~l*6|(4_XGeJ!b4!,0UiAZsh]wiw[Qw EhS5a[');
define('LOGGED_IN_KEY', '=Y9Ag:.[P7?t.Y%yY)gs;[Q7+5|mRm)pQ3jSx#]W#[cC%ZMC952j~wc5f|!9zt<l');
define('NONCE_KEY', 'WA^raGD6}=ft-gkVYv{}jM{+eQ` ~b V?1>(w+D{8F;PsW%{3/wxNH^v%ELeK8r;');
define('AUTH_SALT', '%c:6S2rxB<[?^z;6~*g)n}.#S=97(>ly.SRr5vZ0;,VRL$VM`<0?rUFHe>)wjl@8');
define('SECURE_AUTH_SALT', '{?*OQ*.ojiLF(e!h;`,F)O+c@fG:]u&j6dg%+yj)+&,Y#JdjrqS)jR[)pv*W-{PJ');
define('LOGGED_IN_SALT', ']Kd?R0v:L{[ RM5@6To{pm0JP &Q!3TZ8aH!-b(Ex^(!GX(j5sj(5F9.|v;/-**|');
define('NONCE_SALT', 'Ecw^uC+gt*6HsrK`c a+08k//.dIobcrg?#S^Fa4N~3KM#[G@CAM;NH3?I5rHT $');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', true);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

