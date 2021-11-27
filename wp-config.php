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
define( 'DB_NAME', 'arts and science' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'GjmU;_.qA8bgr0V_?akxLO^I-,-YVGtVU$!RZj6UX+%CB@k4rPcD:Mq,eeKW=,R@' );
define( 'SECURE_AUTH_KEY',  '_9u_DNSVo%p[N<nIr!T1f&(,uM`q(X@^Va~_2T/-W0Zi*P(QI|m`8%QgHKC@K5vK' );
define( 'LOGGED_IN_KEY',    'lPyZ.bD./D>AC%RIkY6s}Kg!qAOsVWbMLI}CtyH1!5!)^pk6H$B=Mc3,Wk+%*j1{' );
define( 'NONCE_KEY',        'Dix>kosQ@d?LLzG~%kaS4?Tk5,XX>PpnSx8|U6F>Uq1,Ne]C_a(X2}J&G2,VHx_t' );
define( 'AUTH_SALT',        '*tf`@v)U8n`,{c.1:py[|H(T@Ac|>Xz2AN*/y%? Z )_%y1U@&]!)(]vBQ-H+EOf' );
define( 'SECURE_AUTH_SALT', '4ySKK>*LofB:#cp:/k=g:M7k+]VWdS8n(EL]`R$R%^b{pI+5gK>7C3zt42pL6c]T' );
define( 'LOGGED_IN_SALT',   'p:,=P<eKnj6dla@3_}mzMVl8,Q{?/n%VvJ~6?!ns7rTuA,8%%i+GCKj&/L;Xn]|[' );
define( 'NONCE_SALT',       '#!^t8OzG?MR0l$Jq!i9Mni69v q:~m_r= WNPeLxvA z+AL[1|T?qC3,N[ZCefA~' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
