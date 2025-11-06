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
define( 'DB_NAME', 'demo' );

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
define( 'AUTH_KEY',         'Xs,za980*wq3Ark$c?B/Sw4(P%x$/kbayvS.V6bN{*O|c9BJ@o{koWJP(LlF#.:n' );
define( 'SECURE_AUTH_KEY',  '*:06JgTsC.;(lhYs3Z~$s2}0Y7*p/Sasu{8u.O5UEOI-4@)REN!+wdF<Fjdq2<ZA' );
define( 'LOGGED_IN_KEY',    'D*il`i<<UEF[NceXhM6^ZdbRpv8 :8`YCUk|4<IdL,}2cB`8E4Dfl/HMu/}LM;$D' );
define( 'NONCE_KEY',        '@%Ht$-RLe:;Cl|:$VN|@st<U}VE}hZMR9Ump[)l^cwSjFlD0#P&y>:}0XU#{Ib$G' );
define( 'AUTH_SALT',        '=b *5&_3yog<f`,V-Tl1Qq$w}LIKq4-is|}g$eLewSN~3#&A[5AIz{pnW]~Lc_g%' );
define( 'SECURE_AUTH_SALT', 'U&/DnpHMB/L`@@p$YVDVi[n092!FlQ{Pm9$ZxCjEAJ)6ycZE8(OwitdPN0R5_|c9' );
define( 'LOGGED_IN_SALT',   'QOp]]%>kT%SI>?&>+TpJ`P)ln.[Ao`Hlr$TD_;&sUd~.&Mr__Miz.h@>BbBiL9Ck' );
define( 'NONCE_SALT',       '}Qr5){nu3nctGh.RLeVwLq 75cZi}z5q*7t&vr)$?27L0DjCQqo<ztFA_{.ELrTk' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
