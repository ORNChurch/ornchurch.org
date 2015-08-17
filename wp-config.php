<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ornchurch');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'B-Vr8r &= gtV>)yIp$ {pi?j|/HcgUsXoAM#YTgjTP2eyaXZ|4xzE&bD[06-Ard');
define('SECURE_AUTH_KEY',  'Bk432F;KeKamKP!^*fnRrhT}$nj$P-a.3O]ge1NTY[Bo+Spkn^M|t;b(z}dIk,0+');
define('LOGGED_IN_KEY',    '&CmRZ-Z|LH#0EQJuCeo)iA{|G%)-<^>?wiQj|1zVK/Wgr:$P.$t>m=v+s,4XrPIM');
define('NONCE_KEY',        'm6bN|a7]56l)jD>_Ur=a;m;)}uf:anUGl$wNlk^A<0+`u>?m/B26E;=`};-u3@v8');
define('AUTH_SALT',        '-#To3**y-o-/z^|Fm=MKvJ|s{=m_{Yep^lr]EF.E_,KKF$foh#f>{WBJ}70k{,X;');
define('SECURE_AUTH_SALT', '^$+p+$k;}m0pQca1Q/v|fIFK%EK(=T}l4`1!^eTmzjM7H<Fp,;:{lNxWb+[A8LDf');
define('LOGGED_IN_SALT',   '0y-%-0(-/:e0_I: wM~eqJo=qp.wu,/q$.%QS9X^q}tyQ r:65NrQt2J5t.qzj$d');
define('NONCE_SALT',       'F9].lES0pV~A?O+sJ:mO`T+(,p}0:)l?UJiO dRH_:<h0t%-&AvrbJ6FN3(QD@TP');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
