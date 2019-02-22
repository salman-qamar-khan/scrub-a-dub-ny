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
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'C4PchpNVTwX9dQwjsseKxaeOnJrXvsomLc1OE29X1NH3dtBZRdzspijt5iVAWGSu');
define('SECURE_AUTH_KEY',  'Dpr5p906ef5ymBjZtQgQMqDOEUKrNHjqUdkr3EBYcaWU4zD3dgl85j8pNpD5WqAr');
define('LOGGED_IN_KEY',    'tqf2SyT3Re0b687jxcghQUUMt8kqnanBrGqhrKs2A6xIyXtGkdTAjwgc4PzviopG');
define('NONCE_KEY',        '68snAKiTg6t44TZqn7EyxaQws9rVrnk4XwBV2NIMjNs55bjNfkRdsGcoj2yPAUFN');
define('AUTH_SALT',        'AN9XDzHnnwXwu26n8ZiIydhE2Q26XtjyRLdoh4qKmM1WvbbqeVvYrlRtJHuI1p4M');
define('SECURE_AUTH_SALT', 'CQnGkJQhEzKj5V8trI2rvFF4pN6UDcuFHH3xnZQAzx9O40UvpXcmbOXSCVqeIpkA');
define('LOGGED_IN_SALT',   'lNgSeZiEQcPLO6o9mhTcx7pQpva64lo7bhuttfPltvi0u94DhIJg78r6OxOuCoQD');
define('NONCE_SALT',       'xoBy4f0pPprMfjHMzu1TwLP5yPeJ4Xjc3dxYRIkelT70PTPhWiRzCj28pOa20wUb');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
