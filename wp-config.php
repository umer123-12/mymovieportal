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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hdmovieshub' );

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
define( 'AUTH_KEY',         '<+bma }8n:i64Hc4rlhICeeg1I[mf;XP=p}&|L!DjrhY:( r91||8lD^*>#c20_)' );
define( 'SECURE_AUTH_KEY',  '#=.L7$97]9s]7.|O7B#>#*5c/6Rn-Se#`Av8saz*o=XQ~s=:twT0ILV|p:w;PmSD' );
define( 'LOGGED_IN_KEY',    '/j&MW|87RcmFFSMa`6%#676,Dj@p+<d!&mkQ@kTpON^`FLPetIqy8%u!5tG|<!8<' );
define( 'NONCE_KEY',        '9[T2AA&6u,$kV>,WZI4#(9|UYEwCn./x/e-9>j$OAor8sr,#sC-dRe,/xL86sYYm' );
define( 'AUTH_SALT',        'sDlAsXj|F$. pWLmj|r]FQf5oqMGp.I]F:D5~E/C/U-z3NnJ>q.&$39 $|cu(B;{' );
define( 'SECURE_AUTH_SALT', 'S ~kst#+f=YX/&|,?Y#g[4.!MbMRcJLs}>y3rv}[P+[Dbd~1`|U4ilg*4AtA$O3|' );
define( 'LOGGED_IN_SALT',   '%Ys.ktja0C6+vF-0e@;|H]^OSDDIK=f9zK_K9=d,-FYX-Tj:I&t;Awdfd,K&9kz5' );
define( 'NONCE_SALT',       'N2]2Dc],MUrN#ML~W}ZI,-$_[&_a8:T9w]<6>%N(BhIM9<6a`ULuT5*Jb+#.x&Ca' );

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
