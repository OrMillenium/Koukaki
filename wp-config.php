<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'koukaki' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '5fv9R&Wn*ajrjW7|.U9rC#mEi8,`v0$fBe{v`e`w73& @2v^:TQeI *Fv+b2Q:!Z' );
define( 'SECURE_AUTH_KEY',  'eWEa`&:K}]!#ZSwcb~Z27K`7.HglO4q1Jp,ZDN+g$EO{G3J4j6mGD7^/%$ww|/Pd' );
define( 'LOGGED_IN_KEY',    'Kl^e>yJ*=M|e*DEZ RG6)w&<?cAvVRGR<]*/1+qaED`QTb8h x|pH&ZkNX@;U}-h' );
define( 'NONCE_KEY',        '(Q?[r!2@N*sr+INT`?>]TEO1]omABak*F.Y5j+skX/Zs69.hWu5o9m{{BR+!tQG0' );
define( 'AUTH_SALT',        'uN<C=cz!AJQ(7.dj7hh>CQ#$CnY-dEQcDslE,[_vW-_W>1v,xQ6SYm23V++U@O5s' );
define( 'SECURE_AUTH_SALT', 'mBcKGYl5r>Y=8!?DFR][VSk-z!Ivz#;6pLoMhG0wH;N=(gJOAw]{DS._K3U?TSv5' );
define( 'LOGGED_IN_SALT',   '!)6qcEpiY~Sv%~yvj?d#q@n7flDL55crx|,(P)VAgtXLy2;-6ChMoN8LVYOIj6$k' );
define( 'NONCE_SALT',       'fAiWN%l+O=[}(+Q,6!Dl&*Nd-*-P)vh-f/s9X[V8/Y#VZh g{Gh+lTad`])&Op@x' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
