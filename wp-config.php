<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'geoffreywichlacz' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'geoffrey.wichlac' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'p01I48uL' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'ipabdd.iut-lens.univ-artois.fr' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[r:bSHu6D{B#&P#nZ/D(w}nmVA[N,r>]d-yB<&e_9>bMzlZEs{-tkG~_emG*LSjB' );
define( 'SECURE_AUTH_KEY',  '#kx&EaO&z;o;K`h2NzxI9SU!FpJklFqOa[:0&f$1/~C?+{N:J1co&Rei%wXd#t*C' );
define( 'LOGGED_IN_KEY',    ',9Wa]Tpvw8!! N{_>pN GDorc;BIBLvp7O_]Hh,<7u#qpc| (OP.m)`44^g!ia^r' );
define( 'NONCE_KEY',        '_XYO{LgnL0iaIMr xM?&9$Ec*Hr@2F6-W1[qS#QDT!3)5uf09%^S)fS,.9S]Sj @' );
define( 'AUTH_SALT',        'X$X8GnZ oD5MsX1<RDvh6w2N?2FvZh[9K&UuF 3Q2xt>2j@c)#axrjBsZnGz=o)O' );
define( 'SECURE_AUTH_SALT', ']plxKpEe>UFhg{#Lt~&aAD)nLH*.B._cQR5-2|{}Odo*%Mo(Yz[y-Kz0X!>_10>=' );
define( 'LOGGED_IN_SALT',   '%uU}b@I/_m|,JrzFz]97  ..C`^6:>xGhNH;n+KW ! &m|h)gsUB0Y{qUcVm<fri' );
define( 'NONCE_SALT',       'z.PP:`c])>~$I6?D[Q~L #:h8CjE@7GSkJ!kF>[+Is7IB2ha4!9iu^+^r0t)^CEG' );
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
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
