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
define( 'DB_NAME', 'mogotest_bd' );

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
define( 'AUTH_KEY',         'Op<78((gf63.gI<oB:2{*Edp8qG|H]~w-2cBj3jEWLU0v|(^f8KJ&`MQKI(i]Q^x' );
define( 'SECURE_AUTH_KEY',  'OUT?6+4h8(KbgF+EmenA:) )2+CAPv(a2GT0Ym]*}uR38+g!}k_i@>%y 4FraBf+' );
define( 'LOGGED_IN_KEY',    'kh}urCUa@hnC$([0/9n%Mg=^H~,R01$i{oOJD17-;a/d9[y?U31BA.Pm8X1>8M}Q' );
define( 'NONCE_KEY',        'C9NwBCdcK]8D$|neVIIKmS=}pRB|2[c4`;~-g.G6*Om~<+y-_Es>)q}ew?Hd:]y&' );
define( 'AUTH_SALT',        '`WGz%&,~H2G6Om/l[]G9}AF}DbA%d1&qf0.S1<P~Ahr@5R.%~N(&iH^$W?s%hc ,' );
define( 'SECURE_AUTH_SALT', 'n5 =W&oK-zF!V`LPNcZe5P%Wjc#z2#$NA/@h6(,S-bE |A6;FK@L2s*e:m1+X}?E' );
define( 'LOGGED_IN_SALT',   'r!]`QlpSg}E7&CZ[6Ri5xoY#u_prEa8L7X-}0aK 2tTq2E/a9YQ`#*~pj7Y3]<o>' );
define( 'NONCE_SALT',       '7msdt]i-SG!cR{g`g(f M>S|mgg] ee0~:^d1e]agCxBP:(0d#JpyMRn!Z3Y?e`J' );

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
