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
define( 'DB_NAME', 'toys' );

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
define( 'AUTH_KEY',         'bQrR.POh$c421&P&*6q#A$ BiH,38hEPEsZ7=0SGZ@I!o__*#| %Vsm:9%%{$ogq' );
define( 'SECURE_AUTH_KEY',  '(!QUA0qkwo/`*TV/fD)CBTd~Fh<ugeeXD0pEN?YU9P@%_{4d=zqzG_%XIdGIxXUg' );
define( 'LOGGED_IN_KEY',    '^WziTQ{!gt7-LZe(1EL),FAKU:1rE6-oj^)bd7d:RJk]?2aq_2Mu$1s2Dt{1D6DZ' );
define( 'NONCE_KEY',        'nPDSB*3#3i@5F$^jeaGeo]Ps&8D@Y[TtL#ooC|JWH1^z-.iCaOiZ-{IY+6_0Gqou' );
define( 'AUTH_SALT',        ']eDM~-Krj&5T/-B`;/8.mPXMX?##y$%;E]-etk$wxh@*535^QUPsFFK*l -M^y7h' );
define( 'SECURE_AUTH_SALT', 'b{Fege6cL0,{<R`F>^Q8A !C8015^/JWi9MnZ*MPKGp>27^uZTP~F#5_go:3I5g:' );
define( 'LOGGED_IN_SALT',   'Vf`3VP;}(P3KdowR[7~>^DL(/>@X-qXa.C*]Ee.?RUAC<)~lg)VShA_=<6u7k<==' );
define( 'NONCE_SALT',       'v1=:oHCAOZ%BUI1Y<wxBw5nYS[hZz]6=]-<xAN{%,CZC5DH}tQHAWPt<HmJ3Ga@J' );

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
