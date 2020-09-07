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
define( 'DB_NAME', 'jallatwordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'jallat' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'm2100' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost:3306' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '-@7vz_b bA7rg*JWq-qd%{{B7[Ggy1Uj=/4!W5{K&#N!wp(M>L$6[*kFU5Cp9sC*' );
define( 'SECURE_AUTH_KEY',  'wd FdI8fEsN+|}p|Tf(f-@GO!Q`6JH{iO.oNbE</)8&q=Z~`H&_N4&gLUcle?L9-' );
define( 'LOGGED_IN_KEY',    '.<Og4]1ToZHra7a|EP)vkVLTv]zj@Fz?sa!39opR|O&s5]y6c,!A!1zV=oO]L@DN' );
define( 'NONCE_KEY',        'l16rjpQ1!,*&HDqqAV5ubSzo^;)||K8V@:Xp2>+k>Z]7zG:.B|WU}Ggo=w=WriZ`' );
define( 'AUTH_SALT',        'pWgEjb2!?+3*O*=P=Jkhw*kuC46jrK][0nLc1:HAf#)US4sZhx59Hm8[q+xxPO`>' );
define( 'SECURE_AUTH_SALT', 'BP:b0!s?wd]`&GY2o;vjl_DA4@b@zUeP~SB}[id8,~bdH~l7!25;DE&,n*;RLP(5' );
define( 'LOGGED_IN_SALT',   'MADgVK7xW}}a U4Nx3bly1_Vynz7Qz8YElt6T|^JIV~pL8e6 <v)1k1 Lqg23ZuI' );
define( 'NONCE_SALT',       '-AQ`=k?.o=5wzq9M-TP43pCqOWU%,<JNB:v9xZ3h:^lGGeDoTxp3QVZ8o_A-.d|i' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
define('FS_METHOD','direct');
