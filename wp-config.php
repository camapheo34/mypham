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
define( 'DB_NAME', 'cmh_mypham' );

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
define( 'AUTH_KEY',         'Q~$inv}Gr#VH.z5U[wfL3o>tn_GC9Cx=&Hpczye6qLk6jevt<i<qQ*J)5X?s5+D/' );
define( 'SECURE_AUTH_KEY',  '9sR<^x~^iYA35*;(@$k,Lo*$35roIiD:htD#Np@1W5^{/%e[d*8_=Q.G =?6y` V' );
define( 'LOGGED_IN_KEY',    'OKVNG0K3cbaapp2F&G<sUN&Tp!h[K[1:3sMD0v@mFNn5yP+z~kvzdkELe<X;4FvM' );
define( 'NONCE_KEY',        'h/5#kwIs#k.jZ@cA1A0[nf/TRh}}^ 8TPSOMKEqOQU0:uf>Hm?{*KvzW+0OQ$^:N' );
define( 'AUTH_SALT',        'T/#k=DP`ywv,.[y<!1D<mRi*y4$Neq_q)&+lCxb(<?GX(RPX9BSbKt5mDS<mYXu>' );
define( 'SECURE_AUTH_SALT', '3.(E8a|%?]</onh?.drWxvq2tLtjIWJEHn_f]N^OmcWu($$qEsS|xTkJs 4DLhm7' );
define( 'LOGGED_IN_SALT',   '1,L&1a*f[-xHowuPqaUfP%UoFfr!)>FAUNXRwH,<$vCE|XMSkA>2uUza295.[<v`' );
define( 'NONCE_SALT',       'CA4|RzSw8F7 C[z3C:yoJf_.PYcg%Q2AmYSBfny _XXP-Qnk>)ib-b 4jww5mPdJ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cmh_';

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
