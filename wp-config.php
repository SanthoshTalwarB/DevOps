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
define('DB_NAME', 'wordpressdb');

/** MySQL database username */
define('DB_USER', 'master');

/** MySQL database password */
define('DB_PASSWORD', 'Qwer!234');

/** MySQL hostname */
define('DB_HOST', 'wordpressdb.ccsbamjlcqrb.us-east-2.rds.amazonaws.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '/EMHLm7P[HrPSsBd8smB0@%Z#+ruY =E}PLeKfA[[nip~*KW=(@![2`4e?%831< ');
define('SECURE_AUTH_KEY',  'sKAM^3aJa^8Kc{z8i-VEn58<Z)T|/9zgA@?KwrM{Jr//`VuW({v>Ad`Aw.^_prVz');
define('LOGGED_IN_KEY',    ']q-S@e^VOn43zmJS_$C^tfNb&ICu!m^ziPk75:vNx9,i<ni2w%Iq5S;?%u9b-,GV');
define('NONCE_KEY',        '(CiV3+<Vb}NM>9ZE%RQuT2>}%^_1A?vn_1D,]n=`9/lTCNKyG5Yr$.W+wH=3cXw]');
define('AUTH_SALT',        'a.Hs$.cLks}Go)D^873HbONdU/<;T0u;^XFBC#3WjrH)itH:QL#lF|^3g|HSAOC/');
define('SECURE_AUTH_SALT', '80/-Zwp61zL^}?$9{8XD*$b|2lLQ}3lf|^sHdDKC})al[[BaOF=W^eL78g%ZBP*a');
define('LOGGED_IN_SALT',   '=GeNzs;~a^=`&3e.&~bwDM/]F|%/*-iE|UAy?:jF<@<EKWnMsvgp@^;yH$Lb~/Mc');
define('NONCE_SALT',       'iJEE+Ia:uQcgf$p0D2 #*%FX:}][l_=&6/!|d-Bx^O]PHp?;Kq2;eylzEU]JV{>W');

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


