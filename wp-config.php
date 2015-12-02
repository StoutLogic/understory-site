<?php

// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** WordPress Salts - https://api.wordpress.org/secret-key/1.1/salt/ */
define('AUTH_KEY',         'H&&zxv&+:)-gLBqGI7t:a!C3#{Oia~M<KYh@I{Q|;9$XN9eDJO9}LM$m: /prB`*');
define('SECURE_AUTH_KEY',  '*CXbCy<Ah)?C/tfskqWu<ycod7}8@aO;YvA9U:M{_+!hv=|rST#<?mw|?_+-1)ok');
define('LOGGED_IN_KEY',    '-<M5F)Fr}HkwCqX)k_i.xN<~ J&5|b4u8J9fyO0f}:RHflC~FGH||W$JldGAQT)O');
define('NONCE_KEY',        'Y|8-T;h?M`+?(?2WgrS-i!k~5})-2BfPy:?;tBd8Ba/H/Zo7wT=Vk&]jdwB@.vJh');
define('AUTH_SALT',        ';#~:4=Z,jB[A9B!).:1tx(BQSxUCL,}nzcnQSv>_aL2PI?^u5U4CD~did+>w;k9%');
define('SECURE_AUTH_SALT', '-gW{5Th0mTlM*c-Xp.XC:GiK7qiUr|&J2#AU*[-caFJCjvy(KzZ11,HyD/-r|oyM');
define('LOGGED_IN_SALT',   'N(ha%pVzk-*9t|e-`:Z~]C,+oz %WKT0-t-V@zC4b!L&!|>c Vr!O<.V}Xx7<KdN');
define('NONCE_SALT',       'W;IPeoiX%{gUSl%8,LoM~diQY/y`j&)}l9w$=_pfCZI*B+|%8&omjAync>)fFk[v');

$table_prefix = 'wp_';

$document_root = rtrim(str_replace(array('/', '\\'), '/', $_SERVER['DOCUMENT_ROOT']), '/');

$root_dir = str_replace(array('/', '\\'), '/', __DIR__);
$wp_dir = str_replace(array('/', '\\'), '/', __DIR__ . '/wp');
$wp_content_dir = str_replace(array('/', '\\'), '/', __DIR__ . '/wp-content');

$root_url = substr_replace($root_dir, '', stripos($root_dir, $document_root), strlen($document_root));
$wp_url = substr_replace($wp_dir, '', stripos($wp_dir, $document_root), strlen($document_root));
$wp_content_url = substr_replace($wp_content_dir, '', stripos($wp_content_dir, $document_root), strlen($document_root));

$scheme = (isset($_SERVER['HTTPS']) and $_SERVER['HTTPS'] != 'off' and !$_SERVER['HTTPS']) ? 'https://' : 'http://';
$host = rtrim($_SERVER['SERVER_NAME'], '/');
$port = (isset($_SERVER['SERVER_PORT']) and $_SERVER['SERVER_PORT'] != '80' and $_SERVER['SERVER_PORT'] != '443') ? ':' . $_SERVER['SERVER_PORT'] : '';

$root_url = $scheme . $host . $port . $root_url;
$wp_url = $scheme . $host . $port . $wp_url;
$wp_content_url = $scheme . $host . $port . $wp_content_url;

define('WP_HOME', $root_url); //url to index.php
define('WP_SITEURL', $wp_url); //url to wordpress installation
define('WP_CONTENT_DIR', $wp_content_dir); //wp-content dir
define('WP_CONTENT_URL', $wp_content_url); //wp-content url

define('WP_DEBUG', false);
if (WP_DEBUG) {
    define('WP_DEBUG_LOG', true);
}

if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/wp/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
