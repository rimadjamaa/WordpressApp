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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


<<<<<<< HEAD
define('AUTH_KEY',         'dTOw3D0/+palfWiJn5w1cIwixmzkfpEzOs6fg1gxoFVwr1tmcbGt9rboguONmFMzk+Nr36BF1w+qFpyeoS/MTw==');
define('SECURE_AUTH_KEY',  'OK1AjY/t2gzxrjRxyI6mmEWNDtvZrqTNZ09ilBXaAgx6FgEwa7TANnTLI9C5VvcUkabA/1zaxK2+PJw6nE3NZA==');
define('LOGGED_IN_KEY',    '55BNjpsaylpZDwvO2qErVmayfGom18/odxvPOWMd8Lh552I75GJ+jK9ZExRN0drnvpg84TSxV2J7RddBhZ9UJg==');
define('NONCE_KEY',        'eVTxe3SjfZ3IjCxjsRaeOne/LD/EO9ZphPhRTODSjPETWUDzU0ylYffMb2kWct9HF2bbe6IgfwMKecwgcvxzNg==');
define('AUTH_SALT',        'Svys5yP+h9WhHR1J9xLKoAXs9DcJnZ74iEgWYrpcHBM34S/0WW2orM1fJp2XV32NpVywF3HIAb+6cJCWyLN7CA==');
define('SECURE_AUTH_SALT', '/BzV73GocM3mBOv3W/snS7c9cof+vQi/8OWdgfee+4nZV+vWvtdv479LDOaD3qp5VpC8pIuscrNewWEtCLfbqQ==');
define('LOGGED_IN_SALT',   'E1bdlYCgBtIrsYTCpFhX+7w5zCqgt42O1woUy1DnjssG1/JpOdB3GsV6Y/kPpVyMSqP0lrBI5/BvPf4FU+NPAA==');
define('NONCE_SALT',       '8wIDoeK0sBeZccIEtiPV/Y250IHJ1WoT50Y4nNs18j+rTdm19xjhTXTp79NqwKGunokWa8TnKUAbeVA8hr4T8g==');
=======
define('AUTH_KEY',         '1f5Ov5BuhtEfypU+CSGPYJFtBniccpcXzilWwq5c4zrXc0dBLfJlGEyUQ3lvtK46ZAjX4SHx8fKXYv52HLfO4w==');
define('SECURE_AUTH_KEY',  'NK52+rhnUAhpIWOHLJfUYdDMNMN9fkyXaaQRgzjxwnfd9PX1aRy3P5TIvGAxNa8+wBNS7m/psMAVsAom3Q3gQg==');
define('LOGGED_IN_KEY',    'MzqEzyWN7HPBqcI2F7ZTlOyMZtPqBe+0GrZk16qgf2jaD6lahEYqRabiKTsU8HyHGI1lNgjFEO1J8Gl0+YntxQ==');
define('NONCE_KEY',        'GeuTuCf8H2caqD4aC7nsDrJHUj+k2jDkdgj72GKDqCq8X49gRotEs+qpCZBwCSR/XMZ+aJyq9sbJDPUlbFkuAg==');
define('AUTH_SALT',        '/lpT/NB9acqbl9isVhGzRcOMjSM/pHTONItabHXz9QgXI7oFvlp+Ws1olip0vfmWV/AhfBvyT+TXFilkCr/0mA==');
define('SECURE_AUTH_SALT', '11UySOcNBli8IILf8929Jylv99UVpl/bk4IzBnr68A/eQB+AxSxgU6MSor8bumSDG+ZfIgv4JdUNIwpkyjJlWg==');
define('LOGGED_IN_SALT',   'IaDNMAaFWnJoxWc1dLoN6bZLg2yvO9PIrkIwoL8J4MRJLtws2IyqyBh4dySYdqOnQ1SIth3KhJkTjKcJlDZHzg==');
define('NONCE_SALT',       'MT16gh8X63zv2fpufNoHZr3FjM/+9nOijz++yXA/3rNvR2sF7ASIpCrlpzNTPykmx7JtlBlVeSJwDtLV6Brnhg==');
>>>>>>> 60e6e0a8edc3a5d1ccb9b95bc72fbde3f05a9794
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
