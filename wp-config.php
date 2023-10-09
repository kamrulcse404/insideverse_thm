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
define( 'DB_NAME', 'insideverse' );

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
define( 'AUTH_KEY',         '#Q7%YPc)2^?W?BcP-(l6=jaNC6u.Q^oZTKoKFA^9e$B1eu KV8tLx(*=w3F:Py(w' );
define( 'SECURE_AUTH_KEY',  'nP>6:j@ *:g$Ey>rAOo(.<.VM*N*+7eo0gXyqH3`yj0]E7:Wc]le#JlEmr2JOrM2' );
define( 'LOGGED_IN_KEY',    '*H$:o{x:<T[*RNkVi{.zHAOV=^$-{kJ>Le&7GV/r8YwWdxCk|KQD%]Lr#n[{l|F.' );
define( 'NONCE_KEY',        '4ksfYY#Qc^g6mxR^/=L<*BTg>h?Rp2;9N0k/OT8So Xk[aKA+@Q]@1n74+}J_h|X' );
define( 'AUTH_SALT',        '9[xH9#A2cr&V pm_JM0rO$4[@rZ2Az K.tY6s>F1z%,X(9v 9 LB]k8%H6gv/,`6' );
define( 'SECURE_AUTH_SALT', 'CM_F:Yw|+a]d@,b$?Qo2EQq!k:V3$ei%e7(^ UCA/hcEeU,K%A4J!)L*2Bl8WW?d' );
define( 'LOGGED_IN_SALT',   'S/DYk6GEL!)/Iwdhyy.:ZSyKv4$5JF_X~)R-*K;pTL%Ih+uO6D,oE|2ju:/`L-I!' );
define( 'NONCE_SALT',       'nY+nm@M;/GG%HE/(Ec-x)5,,^VQ2T`M`_%JQC2_xLQb{F]ih_;?zR=pUmS@D*^:g' );

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
