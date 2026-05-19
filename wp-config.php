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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wc_elvira' );

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
define( 'AUTH_KEY',         '<[Zd0GJpk$7YnZnxcL2EjO:v>tw=;<TfRcuA-`L5yx0a2 9Cl>]JH?e7$No#/cW_' );
define( 'SECURE_AUTH_KEY',  'a5AA4@A032O:<*&imVFok}4WA5OG8Ze@O7be00H6PhT5e/9=72d9!bKY|LrC}>W-' );
define( 'LOGGED_IN_KEY',    '8~OfG(g}q),%vvh~_(;v._%kR.iOFkz&Ozu;-@{`(8>#O]ib6lVAVdSoCyG@xE0Y' );
define( 'NONCE_KEY',        ';M(xFTv%UB,RB1=~p_l%)b1envZOS`ZaD#.Xw~t,bY^n6XbwNnqhANFGkfJL^cr_' );
define( 'AUTH_SALT',        '? fKY|v`,O:A@>nS!r*@q/Uxu{6m:alTep#~Q/pF^$@!LjG_7jgfPM/{ty/t8WqM' );
define( 'SECURE_AUTH_SALT', 'x>^|8ay~<benNCkuQ[xhE5~:Nu+,Ca]dkVa}UtGDKMjgH0]A>[*ID&3#JIRO13) ' );
define( 'LOGGED_IN_SALT',   'jB5tHV%[zkEX4qQ:HBa.o5kQ]8M&cMYL<CMH|Y#+DWrWuBuR#!LxV&zTr4*(l)Im' );
define( 'NONCE_SALT',       'rX`GAAr~q! =P3YXjm(@9puV|d8:2F+zhGFE_Ii2))DJFKIhzvVYx4W%u}WwS3Nw' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define('WP_HOME','http://localhost/WebsiteCorporate.elvira');
define('WP_SITEURL','http://localhost/WebsiteCorporate.elvira');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
