<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wpdatabase' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'wpuser' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'wppass' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', '172.20.0.4' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '4HM]k{6+$*?G%,GIRcZLj8jy$yVqkLsoa633!GO&W+:HWH&(l8rFA@G(y_#+>?^C');
define('SECURE_AUTH_KEY',  '!@r>jmDv}f~|M|[c39:x+0d8EiEj6IPV%{pDPyvfZ{nO(RIMd)00YuQ!He6).FSw');
define('LOGGED_IN_KEY',    'wt)nY%0YBmk%8z{J(>Sjq-C=Nw}0t!&Q&[7e)4]!20+~aEnL!`PdaC#t}H~=9A%+');
define('NONCE_KEY',        'O=VcgZQO,lX4:+|+$R<*q!4EGJ~b,>Ubd+Ypm3btXHTx0wD- jfw#j3BS[rv;&Nv');
define('AUTH_SALT',        'G}zm]d3:@>|15c2Xh/f4Qhst%1Q0AOywnuebaK4Ir>EjYs^kG^)ju+t[KT&-g7tM');
define('SECURE_AUTH_SALT', '5@`+35qkI9=~v|l}tKQdA0JQ+G@_t{$Ef3c0u]CHaj^soSMTF`(9L Zp:@TF6oj0');
define('LOGGED_IN_SALT',   '1m9Wua{T7LF{Te4:0@;2]G63wade#z22|yZ,b)(rhIjV+Mbr_J(Xa+HwndMGzAb5');
define('NONCE_SALT',       '.tF8e|z=FP2fyEVC0HxJP&pc3z(JwcI3n2]cnUO`Y-Sdqb>&|C^G :~K+R$TwcY?');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
