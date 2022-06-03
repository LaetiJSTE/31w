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
define( 'DB_NAME', '31w' );

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
define( 'AUTH_KEY',         '#;/Kw3 @q*L{*{?]qK/6($A[Sh0k{zSYg%H{p-hp#JQ1QTvma&cCx7deoU7_//L/' );
define( 'SECURE_AUTH_KEY',  'a x-Oq?V41j=@q^/tGwh*y[x+Vs(}3T<{[)Gcy!`U G^JprT(|(y=d]Xy6`+hmC^' );
define( 'LOGGED_IN_KEY',    'hJuH>_b:FJ^$zO#~+Q`mn~FQ+^abb}/@Y:{DSoC(*4uu!Z2T<wtTI,jZQX<_NkWI' );
define( 'NONCE_KEY',        'yyIwGDH({#=Y<|cCR^ww?BGHZv5F?%2XZDLC!/KisLro^WTR>EzwI_<L?trJ$O_$' );
define( 'AUTH_SALT',        'HT;,c.95~E^`WcHJm@Q0Ux+lKN78O6GW5s,{/ul#W%W)SnN:XNG.(=#UaqOLD3wd' );
define( 'SECURE_AUTH_SALT', 'V=I[SVu*2`w#lz59/Y%ECB2kvK3Z:_h2NY,p[kfX88;lCu; >qN,];W=:)-~YEqD' );
define( 'LOGGED_IN_SALT',   '{:]a~O|NiZ~GBC%^^biAn<0x&,1C5W. Ip*^=qLhtfFdM;{Z@X72|$v@6I.[:4be' );
define( 'NONCE_SALT',       'GAT-DW-hR@DQQU`c;onP`R][47=P^Fb0<bN@;Z-xS`aVhge;b2ZQw;E;dF6,Zg*Y' );

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
