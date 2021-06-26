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
define( 'DB_NAME', 'shopp' );

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
define( 'AUTH_KEY',         'LTZQ#S rB6Z|f^d&@TL8#<C&e/,e(;fvh_T>` ??X}pKOb,1FM?>7D:tocWsZ-`X' );
define( 'SECURE_AUTH_KEY',  '&}:9XpmE@zp+k#fe{-]XB0OO7%Td5am;cXyorZ{nbK&BZN;1wq+.OxZM9[wU(~PC' );
define( 'LOGGED_IN_KEY',    'L2[*JAAh`jp(% f0/m2rfM>SG Klp?4Ft)S{*u?%dOfNsxKlnK(kV<FxS]S(xfBv' );
define( 'NONCE_KEY',        'P`<#b*mip):7dZneU?klSIP0.%>i_es9CD><-w:=$kuZNMVd=w.}$^_fJ+PG@cH)' );
define( 'AUTH_SALT',        '~!X)X0kwnFPZ;6a=d8w8|H]fb*9EV Ui}2!b9?)9m2D23=yX{q>@mVw#&H!0* P+' );
define( 'SECURE_AUTH_SALT', 'vF$J`bW2}QHny+`aBc/_*]Dn(yHBDzRnXSk5qRay!wl;~JA_V#:s(a,}r9(=x:J(' );
define( 'LOGGED_IN_SALT',   'jwHO!NsE%q?.W?R=s;=P}b$s#<l{aVOfO3_1@m39DUK-u)8xNWm3P.pD79>Av2h ' );
define( 'NONCE_SALT',       'NWMU[kceu3tfqv}/j=2[~4}>Q R73%#Q{H+eKW_GqM`2pP.%~t4;]08ZBd-SlxPk' );

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
