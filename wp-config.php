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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

// Get the current domain name
$server_name = $_SERVER['SERVER_NAME'] ?? '';

// Detect the environment based on the domain
if ($server_name === 'dev.uyamot.org') {

    define( 'DB_NAME', 'u162094946_bGADn' );
    /** Database username */
    define( 'DB_USER', 'u162094946_T7khD' );
    /** Database password */
    define( 'DB_PASSWORD', '3;??4S$bG' );

    echo 'this isthis isthis isthis isthis isthis isthis isthis isthis is' . $server_name;


} elseif ($server_name === 'www.uyamot.org' || $server_name === 'uyamot.org') {

    define( 'DB_NAME', 'u162094946_KM5TM' );
    /** Database username */
    define( 'DB_USER', 'u162094946_Qj1wA' );
    /** Database password */
    define( 'DB_PASSWORD', ']hP!v/9R?2G4' );

    echo 'this isthis isthis isthis isthis isthis isthis isthis isthis is' . $server_name;


} elseif ($server_name === 'localhost'){

    define( 'DB_NAME', 'local' );
    /** Database username */
    define( 'DB_USER', 'root' );
    /** Database password */
    define( 'DB_PASSWORD', 'root' );


    echo 'this isthis isthis isthis isthis isthis isthis isthis isthis is' . $server_name;

}

    /** Database charset to use in creating database tables. */
    define( 'DB_CHARSET', 'utf8' );

    /** The database collate type. Don't change this if in doubt. */
    define( 'DB_COLLATE', '' );

    /** Database hostname */
    define( 'DB_HOST', 'localhost' );


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
define( 'AUTH_KEY',         'knfR+Jtby1P-V4cP. AvZB/-}ahrFJ59 byhb+eHlEt!0A#hF?xK _g:bO*J#U4_' );
define( 'SECURE_AUTH_KEY',  '0VI$d4M<wx6Qp[g8@51n?%$y,&N3sWVZ8G#*96X`3U-aposCGyBB_gXj$+7Hsz/q' );
define( 'LOGGED_IN_KEY',    '=Uo_ (b5Ld>%<o8jyKb AK0^hf<<8|#p9V8cuy%iFWu5w,-%= [uu}[n@jEo9;_,' );
define( 'NONCE_KEY',        'EA@1K_?vc3F|;Ph[I=:EX*&/~<Cuz_Z{]rP^r&J#OIyCJ.AkQwOmVVn@Fp9rGpdZ' );
define( 'AUTH_SALT',        'RI/s;>G>`^M(9w w~dH5{ ynHPuea%NtKZtpb$R1C-}lbpc8n#5>*Ve00P+m&J1[' );
define( 'SECURE_AUTH_SALT', '8>m3?*me6&y!1ftnkSD2bYIf;j_tWT`*t|b^W@qz[D qZ=ll9J}|u$#orHu= ]YY' );
define( 'LOGGED_IN_SALT',   'x-l|.Q@d`+bPg*[,1tpp#>MLhuAO#WK*Be=@KhfvA0T/x!D/^jm?.Q^8~0@!UaLQ' );
define( 'NONCE_SALT',       '`/K%%_8djxPZ.AtgZAuI[wprvw[}1b1;5i$*=08. ]dzG)1:=GV|o^o4IL=6iw+h' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_uyamot';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

if (
    $server_name === 'uyamot.org' || 
    $server_name === 'www.uyamot.org' || 
    $server_name === 'dev.uyamot.org'
) {
    // Disable updates on live and staging
    define('WP_AUTO_UPDATE_CORE', false);
    define('DISALLOW_FILE_MODS', true);
    define('DISALLOW_FILE_EDIT', true);
} else {
    // Enable updates on other environments (if needed)
    define('WP_AUTO_UPDATE_CORE', true);
    define('DISALLOW_FILE_MODS', false);
    define('DISALLOW_FILE_EDIT', false);
}