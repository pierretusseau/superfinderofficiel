<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'superfinder');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-*0lD.vCz ~i.!HT+y@p-@;}&[EFFR@H|(z Fx(Kne[U~#mSb u%?zpQ8+WyHFTn');
define('SECURE_AUTH_KEY',  '/1u_q+l-&;8@ja)qzu,e/|8vi]/B-U-v^!Bjju&:S=]0:Rh;T>=S2#C#|/<J-myT');
define('LOGGED_IN_KEY',    'PA2kORyT-]f!Nc0qJ^0t%^MA]}piMRc%,*`{&llB:Oa~vey=}lvq;qyC=~+|$B$z');
define('NONCE_KEY',        'WqMKL8@kG`0cSQ5m6pXKMYwlP,r|H.PMuTa(.-*#)d!CV+HwZ%Sd$EOAa}-Q(bJ*');
define('AUTH_SALT',        'm@).R9f|KumuUaz0fN=Ec&IP$ILHd FzeEc6.O::2sDP8@ZPZx2<(QKk!NzNX?l%');
define('SECURE_AUTH_SALT', 'b|Fc )J<<&mLP0;``10ked`Ue_!U=-$zBnV#n^Sr +EM$(8X0=r%F:^oF&Z}o[wr');
define('LOGGED_IN_SALT',   'Af<vz.[;:bd~+E&lc/QG!Dn][3HYILA+w&%$U[Y9JdjC|nYI~ojC p<t8qF!J>]w');
define('NONCE_SALT',       'JTifL}ui@pD#KM.exn2x:._a#`P3~nIm?WTTWWmuX-HHh/=e:44NaXeb5cLsY%!$');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'super_wp';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');