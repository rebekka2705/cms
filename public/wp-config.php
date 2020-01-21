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
define( 'DB_NAME', 'db_alex' );

/** MySQL database username */
define( 'DB_USER', 'dbuser_alex' );

/** MySQL database password */
define( 'DB_PASSWORD', 'A39yncz4!' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'F1<z`Y;!FWC[!S.imP(aWQd2zpjx}b{Ajw^=al|fh.3#n`R.SU[(IYhTc;3c;7EN' );
define( 'SECURE_AUTH_KEY',   '5LX]KMa]j&Z*Vp,Dq`3l3o8MC6zzm+0>-1f-frt)I3,S2P_S1c]P]Pu.gf$ectme' );
define( 'LOGGED_IN_KEY',     '$99dx;$>ZcSbG~GR_;EkB0~J96j5e/Cbl_Dnf8F9^!_e :x]BzrD_DD3.[zR9>EP' );
define( 'NONCE_KEY',         '~fo0Hd=. Lc6=N7{P)(i>omy$mD-`bv<0<DG)UNdaBmdHkj WW<,QTy#hwf.QVs?' );
define( 'AUTH_SALT',         'ia5PG{_z[8q7N040i_XaTRJ5/s`0IA`Y=6_aIce%Dy)bJ7+?%$VtXTZilb1vG(z`' );
define( 'SECURE_AUTH_SALT',  '#{o$)(^=hbEdJ%VoWnBENsD/@N(yDh3/SQc?PUtt{XX1.?)N%N,1W*lvlkCgi^J ' );
define( 'LOGGED_IN_SALT',    'V?!{x>+)|Rb=GA+9s,((K*=$R,g/w@<2c 0mxr:%|,qM{>^#u~=vI*gP:Cj*|>q+' );
define( 'NONCE_SALT',        '~tw03pAS-H=bCN@8G@??3r+s&bZ^q68s#ID$%=t4ooeq2&-XR/Y!&r|r_{CwfP=C' );
define( 'WP_CACHE_KEY_SALT', 'u[h]`.E+e#WcL2F%CWO7q,z;8El+rg4k%8gGs1e$S6[&({=A2LDPe%o2VvCuyI!S' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
