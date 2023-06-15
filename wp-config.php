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
define( 'DB_NAME', 'woocommerce' );

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
define( 'AUTH_KEY',         'gA/sg$V{; aNV0;)!j[ADo@Li^HAc,W3@@#rC^,p5wn7D[%eIpJ%&MQ_eRp_[2TM' );
define( 'SECURE_AUTH_KEY',  'Q-Uyj!%{`CF/:28@qzUnCRUC<lkqvC+m8r$ds_WE6@&W.Miu0Y21ixw*<M9-k:4c' );
define( 'LOGGED_IN_KEY',    'MJQ7QIuprjPY,FAptxo](1mdt>CZs4]$N{ mJA22h`.M?x3q=<oy:nquG]Fp75r@' );
define( 'NONCE_KEY',        '5OY `z( uue:<~0E`,],b&/B/2PRRH1+idj+47^c6>7y^WN<igvo/)[JJ7RD@69x' );
define( 'AUTH_SALT',        '5NR$A&7`%nV_ 3JuB,Y9@Oh&(cmk}a@@pgML)*D{<D|-%C&IiQ[A4qlcGqHQ qQC' );
define( 'SECURE_AUTH_SALT', 'by1cn+&A7c{zstOW} GH8_@G%wlwxyxI6TGI{0SfQt4X.i2C{&TGqs>2:o_cDJ4b' );
define( 'LOGGED_IN_SALT',   'D;4us^R7ndb5wVuwd4|3@{(eskPwSK4[Jv$L>*jmxM/.nsBJP*j@_S!HH^e0Pwfq' );
define( 'NONCE_SALT',       'jc_3Z(;O<COVFF95z!q|a7.Gb+ZgiO$ 8<ht`Xo[n;j`VN+^*oM3-vQP1Pe+S(R|' );

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
