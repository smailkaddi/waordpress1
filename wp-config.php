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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'o]t |x0]y6{#L13Q|X[)BEq@=:hol%_[co/O|Q.4b)?aR,. O ToJ@jkFz6~ve;k' );
define( 'SECURE_AUTH_KEY',  ' ](Rqpaxc`7.q5qM#Htg!}j6*m5GG3D@xEwZ_-qd?xnkVs@md<q-XTtmY3 eAo^:' );
define( 'LOGGED_IN_KEY',    '#rsXLG-zbAhk.E^j8X*# PbP_{#[oTrTF/VbcD))vP&PblAoyn+:C+/0[o+G_EUk' );
define( 'NONCE_KEY',        'd;)6xOwQ#q#VL(s6h<Hl)Q!4`Z!:A()GIgxT|09f6o!)-Hq7qFC~{7#AN;]28{ig' );
define( 'AUTH_SALT',        'VA{Xm+*2MmgRUiuYviP@t2XF55t@$nK) (oV@1=tFnCQ^5^u%LLW?![KW=4`{Nd)' );
define( 'SECURE_AUTH_SALT', 'k#XP%/ko%7RJ}CKYp,#eC!2#ldx*:Z+Q~:~;&=e&?`QkMa=!th*6*.[bSxv}9tF+' );
define( 'LOGGED_IN_SALT',   'f@dVZ7_bn3z7>3G.=W)Z]$=BT&`I4dKZ*U^t2)_K]Uya{W?1o[7tL!>=IZFYIqtx' );
define( 'NONCE_SALT',       ']=G?/Ul;X9#`i<53u25y5!u{EF,o%:7)LNh:`}iT%qKJ]sjTUEZCXh/K1c-)3`U4' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
