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
define( 'DB_NAME', 'digivate' );

/** Database username */
define( 'DB_USER', 'dv160823' );

/** Database password */
define( 'DB_PASSWORD', 'dv160823' );

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
define( 'AUTH_KEY',         'q6[hWQ%m=;9M$.e^7+iHtGk;6xZH`0$.-0~vw#LC64{cKw*Tj^{U<O;[#r(XLZlj' );
define( 'SECURE_AUTH_KEY',  '5|_Sr,gM;#~=(x6tYR!=z}HgVzlLp3{atbreB,:sy}:kt:C?-W8|L<6{@+Ru8BaH' );
define( 'LOGGED_IN_KEY',    '~rP~,*cW?MT6!6rPpgK6 {hFO3Vd rK1WH$8H32!;461c`jD^,{ed((no@ U?OX_' );
define( 'NONCE_KEY',        '4DY2]39SD:v.jQcBz;F)I&ES0n%YnUu@oZc1h%-Js&C4!N-Nji}:Sw#?I),;&f&)' );
define( 'AUTH_SALT',        'x(kV.V@&Xdni|0j,6oF?Q^SNzZH7d?2]BH :_Jn;jq]hMN79XO`UokCsq[buFwv|' );
define( 'SECURE_AUTH_SALT', '_F2a}6lUY c~$b|%8bWieW*G4Bun0U0kAHNNI~uFZJ~RFEpyc6,p#?&eiAasJ,IU' );
define( 'LOGGED_IN_SALT',   'nNtYv`M?x#G*R#V2~|/vp`85_-GqIYvj/o.jHN@(Bl!In>8&Hy%@C}gcl:@[=)*i' );
define( 'NONCE_SALT',       'y|V5H?L9K:B)i1 e[ZS6 >6SIODT%M_:n3S9Th-fH#[P&T/DzD;,(gl%akD+8-ds' );

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
