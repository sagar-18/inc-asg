<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wp_inc' );

/** Database username */
define( 'DB_USER', 'wp_inc' );

/** Database password */
define( 'DB_PASSWORD', 'wp1nc42' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'N`vApXQn;?yq]ku$y*eYNcUVfxyOZ_-X)xF8@N,xc3l$jA5dip5MY:Px|K2oC,T>' );
define( 'SECURE_AUTH_KEY',  '*)9/fAlv}DJ;cq!i]TUa.b8%saado$p8F&pLp|6SX+N$kvHf?6H odo|NT-v5gd|' );
define( 'LOGGED_IN_KEY',    'AT{-r%fX1eFp0E3<1<Pw/ZBcX~e e1NvNjR#sqVPv*h3jaxu.cGX}rQ<>Tw1l`iL' );
define( 'NONCE_KEY',        'Xoq}wwUQKz@uQ_1Nu_be:P g5AMR=AL(a&1:~(?-WjklC}BYfj_Vg3z1Q3|nVx.i' );
define( 'AUTH_SALT',        'vLx11b9VtA]`*mE]B?ttR A;p69w*;*dlur/Ta{iKjz]azZs%SBPV,TB*l:? wDV' );
define( 'SECURE_AUTH_SALT', '#Ge:bdZp^lDdk5(i*e)k7m?Iux(y7l!jJ)H9-=r_qIP@daieXnij[3flJ~Tz`0@l' );
define( 'LOGGED_IN_SALT',   '/18$xqu9ADLAeDusa$`<~%|8o)#G6XBDe-6vCM-=F5p)((qM>y[(;eb `za5T&s>' );
define( 'NONCE_SALT',       '4Lp%$G1#%qdH1uomNZqAdBXq@/h$la:65#b@JcvkB%7s#;hbNJt-S8$_yL[z=b.W' );

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
