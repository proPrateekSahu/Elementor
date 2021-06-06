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
define( 'DB_NAME', 'elementor' );

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
define( 'AUTH_KEY',         '{8*.V=U;Lzub?*br@c#uPIWkp<^m[|#E<z?6R/Ky8`< YLNbd$2zDYoW;_9TjQ6V' );
define( 'SECURE_AUTH_KEY',  '67P=45{Ufo]Lo]sL&+vOH]0v !l.&Wj@@%@#)J}k|%`RqJ-,Qs+}Xz@I_s-CZfpA' );
define( 'LOGGED_IN_KEY',    'YgyD0?PB1/KaD<V;[H(.D9xQ|n>>(L-2u-1(|9wom6Rt<eLnV2;@Ct9ALi+%2GZ5' );
define( 'NONCE_KEY',        'Bz)wv#@He.0qE2Yf+CM3hVrfU3Pa)6l5lhLxAlP>n_wM[rc0e9nCmc ;Oxk:p9ty' );
define( 'AUTH_SALT',        'sFj@3hTks(`&6U$+|W,&w_7(fzIj*e.UPM6G:@BL+>uCSvP^%[h:*!X}KKj<#q6I' );
define( 'SECURE_AUTH_SALT', 'ko),H5pb9R_KYwfSOf{fjSNx$QK;ztnrsMH(xZm)FdY0-(RU:ARvH{ap*yTz4v,T' );
define( 'LOGGED_IN_SALT',   '/J,~n 4@D R;kJ63$Vf8qsf~X6wd?c[,Ek){*Mj{io#t_$`8,~j1z+i9Vov5DQp[' );
define( 'NONCE_SALT',       'A%+g8^vF90H,HI-{9t=8{|tj8=EaFul,zRt CAb>1~/mVe 9!|1H33,CV!;Z+s *' );

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
