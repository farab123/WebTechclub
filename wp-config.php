<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webtechclub' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5f)QL7Lm{yH8O|Sq$1HME$3/E,a]5;m~/>:wI-,d{%gk9v~1g22UZvR?),Arml4-' );
define( 'SECURE_AUTH_KEY',  ' nsQa!1eRqetm%l{w66,JB4G-aZ|*zqH!G<3=wCQ7A1~R6o-]}jf#O/X_vS/.DU^' );
define( 'LOGGED_IN_KEY',    'pQU`:rG#H61<~q7lF!W3Np+vS-IXHv#N#y~hW=,&9H>.Y8`u6n2SS*$ze zFM8;-' );
define( 'NONCE_KEY',        'yu+=(pYO{Q]=SW(3@C_D$B)Z2yZ:` B&{=~EB,>Y*=~.D{grHYW^e}%15>FCjKWo' );
define( 'AUTH_SALT',        '>(RGDXKz}cLO]-bsfK<bH*[jUIj}0<5v*O&fQ}X$EWcj,^$PCn;6QS)4&jr4+r@<' );
define( 'SECURE_AUTH_SALT', '=U?jpA:ts1>g8*OfLU>n!j)m j]+dA8_97,=egqH6z$<MAT_Sn5g+6_fhIX`f/LJ' );
define( 'LOGGED_IN_SALT',   '58JU!(7Ij=W]F3u#LztcQw%?2jNbZr4I]w>Tuy7~^O8Ut)%19[WNAs>kyi) XmRs' );
define( 'NONCE_SALT',       'HD|Y{@7)!/[E^OJXb5RAaxbwu1w;2l2s,qO5I/bF,GWxX:Qhxbp#8;16^GJ6pnyZ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
