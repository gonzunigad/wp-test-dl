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
define('DB_NAME', 'deleteme');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ';[vvu $dv*$C%^UkOLLcE@WWHuPE^,^IGdm!ThkRcM0Q_b~+t `8e>:Py2*+b(6L');
define('SECURE_AUTH_KEY',  ')hYwcHDnwPJ;[Q1zD!gqbSc@vH^cXPnm]-A)$cKitrT(+Th)(k]|}sUOnkdM4sH?');
define('LOGGED_IN_KEY',    'i.[xkuBo^Uvl&R_a/1yJJIOK@2{q;@TRP7;<aa6%Aa#sd7=IV*z9!M?QCiY{5p}H');
define('NONCE_KEY',        'oV`*R|fOTG4YKCxFD56DQ+>g?5y!G{j!Nt3*Q{<XG_[cpdJt@5,>%+YCpAr>dEqW');
define('AUTH_SALT',        'H=[Mthst$8{`f8GBN-|m)v/X/>ad0N4}|s&ybQ 8R6;F(OoB!qJ <PO%.?s5O3EH');
define('SECURE_AUTH_SALT', 'rA[lA-vE^}v+;pHAxr|bK/5`.DT:N91hBf~rQ;,Nj(*n gPk2n:(BEc(B8Qw%&R`');
define('LOGGED_IN_SALT',   '~Vf!8/F;zqU^!C=PgQLxU%lN(4B3K8gNk)jI*m0,f 3UIz2@~>3/iUfOww]#IL4W');
define('NONCE_SALT',       'p>_t61[,7P9zP]wgsZ=q&Zh7J~!%6oG(uA-l]p4?vQMFQ2Dj.EBKDpBwL|=ikJ}<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
