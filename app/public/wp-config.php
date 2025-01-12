<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'U-$E|9`7Q6Ao3.qJX15q@n3B*(|=j nY^dhNS=;UjU2OB{*e$wk8]=Ip_oYNY}C4' );
define( 'SECURE_AUTH_KEY',   'dN_,[?7OVfKu`=:oMM6zcRom+q3&uj$SW>&QR2b>p^;?k!t6{DDBm|iW}@FNqvR_' );
define( 'LOGGED_IN_KEY',     '-LoDTJU;3#poB[yW&%>/m,XU#%+Wm`P10`j.Z&]) 2&1~C~(mZA9o]5Q=L_;odq^' );
define( 'NONCE_KEY',         'FemK-Q+#fB-O1M;y^nMoS>IZ_V.3O%6^$Az8ta!ZP;Z7G&oGq{<rui>,y&<7<tC6' );
define( 'AUTH_SALT',         '29wp@H.Bv37RjCVIZ kD]@&aMT+f*]z6SHZ]Qd&!y9EPIAU[92a@UgkS*RdaVu7]' );
define( 'SECURE_AUTH_SALT',  'SOYZO?Q~H{#zEU0K_Ay%=Qjd#viH4&Sb^!LhAtMb#=;Tg^:FF=(Pl.8V6.SsVle@' );
define( 'LOGGED_IN_SALT',    '|,x]w8YUT`6hXDH5hmMKwi4cd*ivzC5Xo87Y>50^ywM0vcoxMeZ+HVpg7:_F.m. ' );
define( 'NONCE_SALT',        'FZ-`mnmBrbwcG0X_Nn^|rVk70s~jac._*<7O)KnV$05]4#d5c={u1MT$-b]] .Bv' );
define( 'WP_CACHE_KEY_SALT', 'Sb@FGp]tA>h,{+V6N!FT^?*6oV?zV 7@>o^EaVJ&m!},;DsBd!2L[#+l~r?~E79 ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
