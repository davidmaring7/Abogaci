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
define( 'FS_METHOD', 'direct' );
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'abogaci' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'More.mg123' );

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
define( 'AUTH_KEY',         'h6rkzLkdS/(3F[f+k3h@s(U(_?O[X$KME68H<-:]fgxx,7PhQ{[wVx|*O?z#9f1J' );
define( 'SECURE_AUTH_KEY',  'b*]?07YXKUbvd>2uk+w_HBCa-(r^i<Uy tWP9U4EfX46vG8]f+%bXvTQVt+IFcR0' );
define( 'LOGGED_IN_KEY',    'qXWP$JoqiI$>Sc` LSM$f&.Y$Wf3eO$t`$F6k![vl,?|g6f4B}m8<S9:9s{[_ s,' );
define( 'NONCE_KEY',        'K%<*6P:_u:_t+>B_#_]vg5SniV>G1#;[{oSJJH4cPS8QP1!WD ={*-wa6(r&QJIH' );
define( 'AUTH_SALT',        '}jj<^7:%Qnn&Xo9/()~Hy]34Uwr]m?1l8):MJ)4*<jb6Fi3P )dNo{&aGe,PkXn}' );
define( 'SECURE_AUTH_SALT', ';E|q_y2^;$coPPUJ$yNI9zbHW^T&}z66C7E=.oQH>mM.8eqx]kL/il^q9U>l[^Vf' );
define( 'LOGGED_IN_SALT',   'C2 4 9L<d?}.gHxx[`Tidm[&hiCBX{u%do31]9DL7kTa96>qAF_+av/E/a1:rdFt' );
define( 'NONCE_SALT',       '(R:I`oceEP>:WG+Aj+E6>Jw&7@_~)]M{wP&yP5%CO{q.{*C>G#zqa3HE*w.+hM`M' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
