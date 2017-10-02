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
define('DB_NAME', 'db_lobo_app');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'lobo_dev');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', ',W{V-SSU^D5D');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', '107.180.2.52');
// /** El nombre de tu base de datos de WordPress */
// define('DB_NAME', 'lobo_publicidad_db');

// /** Tu nombre de usuario de MySQL */
// define('DB_USER', 'root');

// /** Tu contraseña de MySQL */
// define('DB_PASSWORD', '');

// /** Host de MySQL (es muy probable que no necesites cambiarlo) */
// define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY', 'HJ%mm<eq.}qnXsmNm<8u[d{lU>2y55a ;tT3v*70Mj<SF3ar 3TTSq8#!]r>Ys4/');
define('SECURE_AUTH_KEY', '2iN!lNOp&D,I)C-au*_9&+I~m Z0tYn:)ykR%$ssGC<Idb2`qEu2dZKzre5!UzaK');
define('LOGGED_IN_KEY', 'D(Ds@:(uO@GPd:@%`bP$Vd|w<oBtv}-^@W[CG8^*klzb<<mY]_}b3Nu6z|;7_s#n');
define('NONCE_KEY', 'LDH_IrFW]Z<@mn3T/(Lf9g[V88:j^v@o)*w1mFDHR&s2#MTCt4s]M^XYiL E[*dn');
define('AUTH_SALT', 'wlOc<KtvSk||Y=4<}$0wD5dmt4>fBUQpm9* ~*1X@}712Qd|nW*7zl$giK?0-8Gn');
define('SECURE_AUTH_SALT', 'bw3^z8*vZX^|rAmuL$H5P:kmH]8RP}VN=60/a;` P2?g!zkJrPVr}19[:j< t^.3');
define('LOGGED_IN_SALT', 'P=r8r7<fF ,@po.L2A{S6<(iz@5oxx#wHjItLEm`o2+i}B2fdn|qE5K6*MR+#I,~');
define('NONCE_SALT', '*eNw~H+u[S^RyTSR`k3U24j}vcFf2a)w5A9::S!9an~.jd2U*El3+9p Cfex)~(K');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = '_lp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

define('WP_HOME', 'http://127.0.0.1:8080');
define('WP_SITEURL', 'http://127.0.0.1:8080');

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_MEMORY_LIMIT', '128M');

