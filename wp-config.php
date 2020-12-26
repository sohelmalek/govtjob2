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
define( 'DB_NAME', 'govtjob2' );

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
define( 'AUTH_KEY',         'KT|L-9X}iR {<oI]<ox1=B23GdkWOvnX;-t6&oYa|eU&30:zhXGbRal0Sk}i~@WF' );
define( 'SECURE_AUTH_KEY',  'iMk8!.,eS*#(VUME(N1/-^*38Xkg:+Lt]8g]dM.5^}hq{?sp1fv(W8][aN%!lw)r' );
define( 'LOGGED_IN_KEY',    'UzMR& UyHN,(f>0U ~=b~Ia)a+;DTy%tbj]T]EhTP[{;1[CEAFUtMq/4EJ]4qk 3' );
define( 'NONCE_KEY',        'W@tST$4[,)T1*u{,0L?}KbXPkU5T!,lNx%E:>EoR$o+$aTx>bZL[(Obz.yO};_FA' );
define( 'AUTH_SALT',        'licB?)+XKyh&w>ZA0EK; aPvM9um|L=gC^PA@TsKiiKgT%c GF%?%<VaV{<)F~`J' );
define( 'SECURE_AUTH_SALT', 'R]sR%il LQo%@pVdZO$,`J;;dQ-0J/QZw+!_[pHzs=luF9b7J7c)*D]$.IaU7bJT' );
define( 'LOGGED_IN_SALT',   'e2#ukX^&<0kSkeN.op1DAmY<@bVY,%f,HJB*6-vzZz|qYo*</kwj*vfqzM)0p3Ia' );
define( 'NONCE_SALT',       ' c`~>oC$h9*,1M<|/.@C{r>Hw4<-USZY3[U8=yfiN3d%C=*^1eqtQkIz&qWKd/`N' );

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
