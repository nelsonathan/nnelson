<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'nnelson');

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
define('AUTH_KEY',         'Mokvv4=)|acm+o-nB6^}aH7WM,CSG/1XAB-:WMM{(*Rb-;%[H`Z<bMWR*aS_kyTw');
define('SECURE_AUTH_KEY',  'g)04pM#Q~i-,@1FSGX6ks.p!M{wsEtTop,n&La8CL7jp:YzW&iMCw1lpWG[4L%H|');
define('LOGGED_IN_KEY',    ' .y&Rp)7~%LW,B-ajLqR&34#(h.>gOl3H^,6E8KH{=e}j,Lqv8g<_D`(-H0Oa+7_');
define('NONCE_KEY',        '^Rg[$I8Wo#r0yTm1zT:r}~bz-_[RX^gKO2)4](xRBdA2Bj=fL1-|orr3lA6=:O>/');
define('AUTH_SALT',        'ylzj86vE8d0[a;+4-kkU#QEb!CSb[^RT`OlpTMsEOLjn@t +LQF@Ajog_3tPQ;g>');
define('SECURE_AUTH_SALT', 'D>7s9(9AL70{yn:@8tGk5[f};ncZsNTJm{/sj(TTYmCdlj0W||%[I$gmuFx8-%cK');
define('LOGGED_IN_SALT',   'hf/UIgPVlEl-*]YinHr}<tXN(=Q(A9=&X}~[jp!}WP$|sM?~NY.i-r~}R}{I3>1v');
define('NONCE_SALT',       '?+WtEU}hq75oV->g>6274cg-RT*r8Cy([YjZ{H%A>v]$?2x7r%fe>pZJ*rK *!|T');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'nn_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
