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
define( 'DB_NAME', 'dog_shelter' );

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
define( 'AUTH_KEY',         'q,@~?6~5nZ{[)Eu< sCGP6MHfU[rbe[Hs]plX|Z;8&I8M@(yOdn+-bF%r&J22I%H' );
define( 'SECURE_AUTH_KEY',  'n*V,hWLM@8bF.^x*ExXxGwoEZG)*jj|,dHLs<d2H+Y*k^q9[*-c@GTm>QWuN6-le' );
define( 'LOGGED_IN_KEY',    'c-JbvzQftS`O+/+j[ &as:1`jY}U^#8(1H__rhhb.LXRSQ}Aw8^Iyh_px`ix]mLG' );
define( 'NONCE_KEY',        'A7`q7<Yet&P:B]H*=$~w$9J|F5oX3`hGTY}#9HR/k>O8X`-muqN!T}0*-I+jGl@X' );
define( 'AUTH_SALT',        'ytr#7Ug~f92;P]xh%|KZ5jL^;N=1V(m2!c1TKYf{|<>}rto#>2vx*/u00YucXwJ5' );
define( 'SECURE_AUTH_SALT', 'YO2>8hERup,dn/0E]^K.B<W{2pbL2Hh?@~cMy3piTuJl+J:H:T)[?RE(ap(?F`|g' );
define( 'LOGGED_IN_SALT',   'ciaS)b<UKln/``-EeS_P%Gzr^uk:1=z+,ts;|IOCvgQ%ZH9>GAm]O2[_*cDn$]51' );
define( 'NONCE_SALT',       'xqs^2t~I6),4T]Jo6**b9a5>Ct=OP.zj-3[(AAf8.e>yufL}:d{Q>~H}[jbOpk+i' );

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
