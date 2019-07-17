<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wp_scom');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', "");

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/** Define o limite de memória */
define('WP_MEMORY_LIMIT', '256M');

/** Upload direto de plugins */
define('FS_METHOD', 'direct');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'E91Z3]!9_D2FGhbc7rqGlYwt31rVBHx+EV#-.H&a/:xy)a6BmWhNUZ~sHQ_/)*Z;');
define('SECURE_AUTH_KEY',  'h*YDo$`k1FN%M:.c<~*aV!w_YLJn[%4p43dGEEoOL[WnEFU6#?:RB6ZmpMH.mzJ;');
define('LOGGED_IN_KEY',    't=f(T9EgbdtY6GSw:r:Nkt}w[BQ`_p$k%L^MIS6yWBD$wBCkLvKC9<<Wz56 ,KX)');
define('NONCE_KEY',        '1eJ~KRah5?3quDD>wRE#xXVbJ[[_PE@~9PL T<Z60z}Dt@3.oFi%&tK/3EFRb/mw');
define('AUTH_SALT',        'IEB[DI8CaA+0d*M,jZNDh_L_Yq%PDJ2^MKb ~`n$,%Bi@>~?F&0!5Ma$h$xKe[g~');
define('SECURE_AUTH_SALT', '?YQz%JIg*|q6_Km^vmEgZP0hOs|Xf_NaBZ AWkJpsTcD*u%LvW_2#w$dG@xA,<X.');
define('LOGGED_IN_SALT',   'J-p;|?q}a=EN,#)vC/O.ucdw-2p=I7^Nzxe0:`J?,-L4f%A^w@uHld$lN=*+*M}Z');
define('NONCE_SALT',       '0{RS![}lbG9SJDANi3YWA2Ow%Ke,yR+/~2/YdSd_Gt+8KX2$L}RBRV>i}D!.$17~');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
