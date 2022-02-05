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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '9[B{t&,~$Zc4D=6ujK5Aq;E?*Y7FQO4JS9j+$0a9 )7sdT#Gq*B9Pr0t6=Os|w-y' );
define( 'SECURE_AUTH_KEY',  'Spz8pBOMH(Wst_`ReZ2pA-r2I-iq_KFJ$-3.B]-36ib6A|,O!RibB-SEIf%K}Yi0' );
define( 'LOGGED_IN_KEY',    'peuGM+dlR|N+UT;WF=L.Aup_$FP>,U2:<`&s;cv21y$@VvgR|#8}!K1oz-GTEp-3' );
define( 'NONCE_KEY',        'Hg7XC%PiJ2>B%hQ^c?*Vd?4c3Ri8b2TOMPapb%yMrK_|`pbyEv?h<429FXn^GlI#' );
define( 'AUTH_SALT',        'ZDYd DO$0?YY2yY8@ceXV,_1X#xfitp/5zndcxaUGaOn_F8G*QnF~-5[n$BuPWAQ' );
define( 'SECURE_AUTH_SALT', 'mD<`m{emoGT#_O:Buw?A S5)L{po#+G>[jsxKg|H X}^1+*nw<}aF~r=,+R{S!vm' );
define( 'LOGGED_IN_SALT',   '*NQ/g(a^)#l9E%va9~De^P8oe,&O*T&)+s}nN=Z^znHVup]<eIqPd[|oCD$MMC_I' );
define( 'NONCE_SALT',       '2h@Yd63A?fRl>%(oxiD2{Kg&Lv<?XXt]06VD}``Z6M?vRgxO=+)w/vQD.vHS.3J[' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
