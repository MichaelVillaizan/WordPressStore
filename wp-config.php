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
define( 'DB_NAME', 'pgif' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define('AUTH_KEY',         '^|fa,;C#2( `d?L!Z(SwGg,n&>q=+rdM,K)4m&<To gvG6Yz$GHp%Xa;z#H,]}Tg');
define('SECURE_AUTH_KEY',  'cJSj+=sU$&dr9qdwJ[Dzxes$rQf(.He[uj:<f6|.v0cEMvSvqh@TbVhsy)-M#%=|');
define('LOGGED_IN_KEY',    '5JWDn-5Dn6tz^)?-{%fWPBboBj?}0-pmW-g,: I{ P7<8sJk)/-uuf Sl%@%GYA!');
define('NONCE_KEY',        'C$3kv5b3Em70`;U63(,ANrU!b:eI6FeS/xcK?T?VFLZ{-x]KRb11Lwy5ZmQ}41kt');
define('AUTH_SALT',        '89*qot::5~)#@?B%ZAvpZj1Z,[ ^hKnSt)eb&J]t8,qM2Gm{/hR>%%(Idx>GE.jM');
define('SECURE_AUTH_SALT', ']}T+K~11,VAP;)l_*E06#^R-UzG|rf`Lh[>c<Eosqf-5HQwSrlA6$+{S]TRt`-KK');
define('LOGGED_IN_SALT',   'r||X#?8.._V%>l^_ ,wxrNp<;/EmG(]<@T+3TB0JmO{M^+&&mNB<A5Y;H0fcf$a1');
define('NONCE_SALT',       'pGPqj[`$lcvm;Bvf,LO5kipUX)EAd!PymenehAHB-scH:3?$UYgS@-/u H|0)m_-');

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
