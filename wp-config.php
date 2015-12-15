<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_default');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'wp');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         '#=%TH!>N;)2R&`o^)Ju+ehe>/`<#vP*x>9|-u5q|nI |DE$lO[HN[gAr+jH/M#Ph');
define('SECURE_AUTH_KEY',  '?dE^uPu^+z,4DF4#A+Qow20x1|#-_8~agw>?mn{:;-!:gn70-|UL/A-i~|Bhey;$');
define('LOGGED_IN_KEY',    '8}J{F.vET<|7F]yH.5^*6on!-[0mM`>em2[^B Ii(Ysd1:(5+{|dSxs8r5<,ll(M');
define('NONCE_KEY',        '+EEOg;;[0b`Z;ck@h+#-|C,JT({$zBQT-{AApVY}r{#cQ<.q XHi5z]-%jMOYNq>');
define('AUTH_SALT',        '$lPYj(7S+)2qe6-Rh<GUW^u+0?)K%|y7=2-qVs.DQ1F7 u(F8v J>O{(jlY:OI2P');
define('SECURE_AUTH_SALT', '{S?T3->-ntm3r5/ok-_{ov-{0=.-8=.L]R4>6Miv9t)s_Mt^(h.TJPH{MuI-Yf^|');
define('LOGGED_IN_SALT',   'G*R^_8oJh!An*X@)-nv$0#y_0-/vPaDrG3 N|$tx^k&I:0,Ja/2edI~T&=!d6`B+');
define('NONCE_SALT',       'U Np)JN=:3!+q)6|jBq;mMK`8a-[/|S-=d](~6E[H#`^<Oko03?iS9RuvfDx;#y(');


$table_prefix = 'wp_';


// Match any requests made via xip.io.
if ( isset( $_SERVER['HTTP_HOST'] ) && preg_match('/^(local.wordpress.)\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}(.xip.io)\z/', $_SERVER['HTTP_HOST'] ) ) {
define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] );
define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] );
}

define( 'WP_DEBUG', true );



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
