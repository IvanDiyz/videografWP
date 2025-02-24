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
define( 'DB_NAME', 'videograf_bd' );

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
define( 'AUTH_KEY',         'UJ$tO;.[E(Qed)t,3)J#=Hly-vg/M_(MFa:-486Awb~3Is)LygWaRqL2ivVeXG;.' );
define( 'SECURE_AUTH_KEY',  '~LjAPhs$&jJ2`RKPf<>iU]i(]0lBjTeOEE,(Fzz;MPLy-B$`f*Y:H#M<;b_Zd~vj' );
define( 'LOGGED_IN_KEY',    'BUht?F^tN7PuFVCf={>5X,k4u#>%#S>J)XQRFM;8.05aJc|AEqE8R_AgB[*#`]Q_' );
define( 'NONCE_KEY',        'd}*mVQR?L$i^tSC8J>=ZY?/29x1WB$0hfNt7j~ BEs5EuYX{II;<tGtM;]g{y>Ex' );
define( 'AUTH_SALT',        'JDY]E.Nq*giiFW75t}He:96>b{CEb:8%B9K8[x!(?wr*W-@UvDUc^mT5kd+4+E{i' );
define( 'SECURE_AUTH_SALT', 'AY(wzT1EZMm(I;DoE7uh5XD[g/jVmK}h4zS[Lr{]<!_u.<_377Wj~!^dxY1 jl!a' );
define( 'LOGGED_IN_SALT',   '6ys[d/GJ;nFIM/DkyDdLGI[]WPqI.o~)uK5mle~m1*9a13<ja<!@8!e1E4w<z,>R' );
define( 'NONCE_SALT',       '?J.Uf [SYV4/|?Dx*<Ba)+sn2mqj~f3bU!zA nm/R$Y.$9V0gT15n6uDB}=o4%YF' );

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
