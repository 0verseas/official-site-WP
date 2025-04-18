<?php
//Begin Really Simple SSL key
define('RSSSL_KEY', 'Q3zdpPhlOfIG9dREA7Fg9RQpomidTOqDwQdmmk6UgOoJk8X5li1XB7DvMEG5H7Tu');
//END Really Simple SSL key
define( 'WP_CACHE', true );


/*
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
 * This has been slightly modified (to read environment variables) for use in Docker.
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// IMPORTANT: this file needs to stay in-sync with https://github.com/WordPress/WordPress/blob/master/wp-config-sample.php
// (it gets parsed by the upstream wizard in https://github.com/WordPress/WordPress/blob/f27cb65e1ef25d11b535695a660e7282b98eb742/wp-admin/setup-config.php#L356-L392)
// a helper function to lookup "env_FILE", "env", then fallback
if (!function_exists('getenv_docker')) {
	// https://github.com/docker-library/wordpress/issues/588 (WP-CLI will load this file 2x)
	function getenv_docker($env, $default) {
		if ($fileEnv = getenv($env . '_FILE')) {
			return rtrim(file_get_contents($fileEnv), "\r\n");
		}
		else if (($val = getenv($env)) !== false) {
			return $val;
		}
		else {
			return $default;
		}
	}
}
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', getenv_docker('WORDPRESS_DB_NAME', 'wordpress') );
/** Database username */
define( 'DB_USER', getenv_docker('WORDPRESS_DB_USER', 'example username') );
/** Database password */
define( 'DB_PASSWORD', getenv_docker('WORDPRESS_DB_PASSWORD', 'example password') );
/**
 * Docker image fallback values above are sourced from the official WordPress installation wizard:
 * https://github.com/WordPress/WordPress/blob/f9cc35ebad82753e9c86de322ea5c76a9001c7e2/wp-admin/setup-config.php#L216-L230
 * (However, using "example username" and "example password" in your database is strongly discouraged.  Please use strong, random credentials!)
 */
/** Database hostname */
define( 'DB_HOST', getenv_docker('WORDPRESS_DB_HOST', 'mysql') );
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', getenv_docker('WORDPRESS_DB_CHARSET', 'utf8') );
/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', getenv_docker('WORDPRESS_DB_COLLATE', '') );
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
/**define( 'AUTH_KEY',         getenv_docker('WORDPRESS_AUTH_KEY',         'f64103bb1ee2a4c631cc47a06f91110b9d3d67c9') );
define( 'SECURE_AUTH_KEY',  getenv_docker('WORDPRESS_SECURE_AUTH_KEY',  'c9256ececcb6a82973cb2479d69a84cc465dc848') );
define( 'LOGGED_IN_KEY',    getenv_docker('WORDPRESS_LOGGED_IN_KEY',    'd3c893e2165414b4c3077b9eba0a9e111c26951f') );
define( 'NONCE_KEY',        getenv_docker('WORDPRESS_NONCE_KEY',        '8eb78646b865f113c17c48527d3f793babc78676') );
define( 'AUTH_SALT',        getenv_docker('WORDPRESS_AUTH_SALT',        '1eaef98afb68032e3fd861bb4ccad855c6fea1a9') );
define( 'SECURE_AUTH_SALT', getenv_docker('WORDPRESS_SECURE_AUTH_SALT', '77b6b27a2f05fbc8b0a46185a63a5286f35f7de2') );
define( 'LOGGED_IN_SALT',   getenv_docker('WORDPRESS_LOGGED_IN_SALT',   'c81b256122c6995992144bec0359616b8dba7efc') );
define( 'NONCE_SALT',       getenv_docker('WORDPRESS_NONCE_SALT',       'f6515537821380d049b3389e9986f77feb522e05') );*/
define('AUTH_KEY',          getenv_docker('WORDPRESS_AUTH_KEY',         'u1uY+gv?*h@HCFluO}Y=#e-.vtZca&Xsdhgv%PH-l-`*Umt%Al;iW~sh)FW4IAQs'));
define('SECURE_AUTH_KEY',   getenv_docker('WORDPRESS_SECURE_AUTH_KEY',  'iF4Mx:sfRSRRbNf+Lvmhr.v++-M|ewJv[5ck`MUoQQFxdC0mwGb_opZrV+.|[bQQ'));
define('LOGGED_IN_KEY',     getenv_docker('WORDPRESS_LOGGED_IN_KEY',    'a,IDSq7K [L}UN-W=cX?_lPH;Dy[xb5R,X0|M>,L!8[/X5UUx|!#mOA19=?|.-gj'));
define('NONCE_KEY',         getenv_docker('WORDPRESS_NONCE_KEY',        '/^;w%lfEB <P+!XcwxHSoHGP3BsGv8-TOK$-ESXc3T3X5^%-VG3NyEYv,WJ!Y;` '));
define('AUTH_SALT',         getenv_docker('WORDPRESS_AUTH_SALT',        'p Q?h]I+>a87yyH{d!?mHtzj?;.{rytZhD{I*f3e{3U . 0ZF D3E~ %](u9_DC)'));
define('SECURE_AUTH_SALT',  getenv_docker('WORDPRESS_SECURE_AUTH_SALT', ':yP kGDxO.lf{K+!Z`t[|UeWLQspz+6:>q=8c<4++]2_[k=Ud#4|0B`k/DEv[z^7'));
define('LOGGED_IN_SALT',    getenv_docker('WORDPRESS_LOGGED_IN_SALT',   'x,kn9FVsD!4^Oe]~}8+M(~]%c9)PhF4;i7ZG-%2jw:Ilh{(qaQ2|w}6e5cRw+z,0'));
define('NONCE_SALT',        getenv_docker('WORDPRESS_NONCE_SALT',       '.{C7-ON6AP#qbl`+cxhx(rUy5dff0Ya= rkzon+XduT^[87-4|;1}L?7#6raH}LH'));
// (See also https://wordpress.stackexchange.com/a/152905/199287)
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = getenv_docker('WORDPRESS_TABLE_PREFIX', 'wp_');
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
define( 'WP_DEBUG', !!getenv_docker('WORDPRESS_DEBUG', '') );
/* Add any custom values between this line and the "stop editing" line. */
// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
// see also https://wordpress.org/support/article/administration-over-ssl/#using-a-reverse-proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false) {
	$_SERVER['HTTPS'] = 'on';
}
// (we include this by default because reverse proxying is extremely common in container environments)
if ($configExtra = getenv_docker('WORDPRESS_CONFIG_EXTRA', '')) {
	eval($configExtra);
}
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

//define( 'DISALLOW_FILE_EDIT', true );   
//@ini_set('session.cookie_httponly', true); 
//@ini_set('session.cookie_secure', true); 
//@ini_set('session.use_only_cookies', true);

//define( 'COOKIE_DOMAIN', 'cmn-hant.overseas.ncnu.edu.tw' );
//define( 'FORCE_SSL_ADMIN', true );
//define( 'COOKIE_SECURE', true );
//define( 'COOKIE_HTTPONLY', true );

//define('FORCE_SSL_ADMIN', true);
//define('ADMIN_COOKIE_PATH', '/wp-admin');
//define('SECURE_AUTH_COOKIE', 'secure_auth');
//define('LOGGED_IN_COOKIE', 'logged_in');
//define('AUTH_COOKIE', 'auth');
//define('TEST_COOKIE', 'test_cookie');
//define('COOKIE_DOMAIN', $_SERVER['HTTP_HOST']);
//define('COOKIEPATH', '/');
//define('SITECOOKIEPATH', '/');












































































































