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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'project' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Lam-us[OXQxE|71;@DSm[ik6l8Aik#ZNY-BJk~r4>?>H0M4- gKmpUgRFX]pgW=x' );
define( 'SECURE_AUTH_KEY',  'S81qZxb2E*|IfTO;J6v#Aq`:V/pDGy2l6gcsrDG.r.fpVvddsVKcytO|3x3Q$Jd-' );
define( 'LOGGED_IN_KEY',    'RC`Z,*!F]T(yupU!]@]4&)|b`+;?%t3.FD3c*6STp~dIm5[KpUSO7X)[(aW<!p?R' );
define( 'NONCE_KEY',        'd*MXw<r8X1ul,2|&sK?N=1jK*RZ[=k7#_S3,f.r5a5PVKMM+3eRab?a=83WWubF{' );
define( 'AUTH_SALT',        '|>znI.`j$SxYE]|j_68bSO9v<9I[~*BU@,k[VS#+a=d:@P7q9yE=:rPDoqUQL2{^' );
define( 'SECURE_AUTH_SALT', 'Vq|eAP]eGgx3Y!yp(($xYCi4nS6+w;S]=,!(GjD;Ga$=MWwfVMMso,0_|Q9w>--%' );
define( 'LOGGED_IN_SALT',   'MAQ7rFcrkC-!x zhWome@Xwpf6.UvbQbk1=)A.w3{2u(tuZ`h)_kmtBjTYIcBS;|' );
define( 'NONCE_SALT',       'k&Bo]Jt;`oy?FrY#CMf7Zu0(=*2V<^8^=@|u5HQo-g39 d_b;p.[N+aMj;h`:)^&' );

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
