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
define( 'DB_NAME', 'stuffreborn' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'R^x~s^w_R*Uh>ORAz7lz`6n}1<6Rqu;VE?*vCO]Wi50FMJCKNlAAhD>-eR4u:OaA' );
define( 'SECURE_AUTH_KEY',  '0a,;4V3yARjIXfB!9!`NdKQ4}wfQs|o{>{sdN8BmZ=joQenA@Zr+CAQMNkt9rvI)' );
define( 'LOGGED_IN_KEY',    'ew0wWtHV3HZwPNU|3ji|NjFKIi7gAXQq%*keuHLO^,1GQYd]0&X?v+q9e8?0[`YH' );
define( 'NONCE_KEY',        '7K@JO%^S{rCT76IDlD }qa#>zU>uT{ 7c}nn(Jtpeuncc& t>08!OJRY]bHPOM~#' );
define( 'AUTH_SALT',        '49RY}91`%3Mv1m)-g#J|SXp[5bgI9*|.6$MjH4BO@of7eK:URixER*~P@PuJEQJh' );
define( 'SECURE_AUTH_SALT', '.>nO,SC(8YEvdfw`NgjWz[^*>(x>1f:gK;g%6NAb:UE V]E,)~@L|p$8C#d${#E~' );
define( 'LOGGED_IN_SALT',   '?~y*Z@OyQj-tXYu%x`.<+a8p9V I)@-Ic.xau@j ]Q#<wUY^Lp3;>GJH9-[>])vF' );
define( 'NONCE_SALT',       'T) X}&xX {=v2K*|E,X8#O-#H=4M`f8=&,+mNB)e:(/WNMa3f?|G$BeSJl$m?^$w' );
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
