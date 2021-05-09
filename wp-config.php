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
define( 'DB_NAME', 'tkb' );

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
define( 'AUTH_KEY',         '2%mGo!HkS;nZ*|uIaB>1~_&M@gU:-OZ{LB8>FjX+6+r^3!Nm[10-IyasNd~-?)kG' );
define( 'SECURE_AUTH_KEY',  'Ia&plhR0.GP9E!W!kS}dIzfpq0EoCo7W$;+`!ZIR{y>J-;/h~q-HSlhyTtJ@Y`s,' );
define( 'LOGGED_IN_KEY',    '*w#CGnW0|!A4gF/q@<&--VKXVF.tQbU$g0p8~4_6`)t?yB6bHygkq=K;>(k29#TS' );
define( 'NONCE_KEY',        '%`vmG:Tba^ #c_gYEk[*{|nIz^N{lPS`luFl7,:Mo:9@-DidC-QQTT}_(k0!5O*{' );
define( 'AUTH_SALT',        'iC@)svW>_~;F{K#sr6i!E8{@iHC(9)1+,Q]?Pe8-T+TE*R?4iK>|WK_,.o{*V77M' );
define( 'SECURE_AUTH_SALT', '?EX-FR93+tYv4@>{@p>$#G-dmFbm_&NEg!la2APf})rXsiRT]G@rslM4@{I0^UDd' );
define( 'LOGGED_IN_SALT',   'Or5 NF@i& kEYc:V51Wt[y!~x55S-K-%1.,;e`7]SU`)igjy.fucmY2%mwzpFTTc' );
define( 'NONCE_SALT',       'ki|[zrKg{&Rh9{-5A}SZ}5rpG{.K}9](C[Q9v%L(6a}EnWevB8:#(Rni;E]#<<>E' );
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
