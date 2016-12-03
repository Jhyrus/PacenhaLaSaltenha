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
define('DB_NAME', 'pacena_la_saltena');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'Mormed2203497');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');
/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '){SfuWcT>zINtVr=:#1>A&dE#GOY;$T!(o27VwHNV*XT1OcdhQzJ0}OH&|uIi@}(');
define('SECURE_AUTH_KEY', 'P8Z|&+X1K}j/e5B!@m^W2vk+.4en,@hfLv4pNyNrC!$R10w>3hy!S&$/.0HC.P2`');
define('LOGGED_IN_KEY', '+j_;33LN0Scer7&8.Wbu-Tf[MSv3eSshAT4GsD^uGeGs_LeL592,TY]oiD+=Lk+8');
define('NONCE_KEY', 'm^@KT4]cR-w0<r?b;W@Y0AQrsN=yJ,HiT|l+Q*-d}R69*40YCD]V(7LE,^xSaF$q');
define('AUTH_SALT', 'u!vv=&4+}^yL{1c:cz6(az;1N}vFzc5:]s {lTp=xal_t8~-Nb:RPW7hh)pP~Gg]');
define('SECURE_AUTH_SALT', 'm#C/d[|,,?V<NY8MI6deq)8O5.[|J|;.Vrp#u,DQ?r,LdES}BO!7q`>+,$EUTBEq');
define('LOGGED_IN_SALT', '_jHTC.e8+tRen G{SPJg.I@FY%7pF/.J$2XlJO}Z_J)u]W{lLK&4/f,z$Q.nl4EU');
define('NONCE_SALT', '[S~Q?GGS]X%kGUo~dV^5 <u_*V544#uizq!U^LC?:>A6:b(G?bz3aPIAew6b^Mj9');

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
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


