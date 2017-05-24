<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'br_status_loojas');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '123456');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$)@YnD|j|Sb[)D-:7t%ae_/Z@cnA{2XzHR,!qBYJ$%1mg? ;O /U;y|$cggCK0-s');
define('SECURE_AUTH_KEY',  'vwsM(S;HOoQ glt{>_Q~WrqfVjSnDXo8VvYJ6$x Mgz[9vu[ ,pc-rg/&O4pAH8M');
define('LOGGED_IN_KEY',    ':g%#vA+?d/xOR+ Yal:A%,:tkPaZX$$}C}fMdj)a<9E63tPiYR/{/J,g~4$G<]2d');
define('NONCE_KEY',        '#(p3/Ki,azeMy1JiArJj{CWzfk?v!qJi<xBEjQg&vGQDIgv*fUcUclNOq^:.zO <');
define('AUTH_SALT',        'O /-d]r7&v~*=$.5f]@Ie58y|6&h6dI?4k?3(,R<EAr;?TT8t~83PvggFdyWGp_ ');
define('SECURE_AUTH_SALT', '/n!B/F3UNmPO9TGE.#A+kCLNQws_H%WLj8l8}kw9~EQ&]1LBXTH#>9KVh2oe}Wa7');
define('LOGGED_IN_SALT',   '#^dao7oWW#_ZUBwCE+(Ef&,fj|LxF@y[z!dHQ.f`nH-yf!nD+mTn3~?`hNSMB#Y;');
define('NONCE_SALT',       'KWd>7|U;GdhCiai9;>5Pi)=@Zk$~X~*dLgU#bI2F}8a;S)?a9SH3ELHDR$!=sW#X');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'st_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
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
