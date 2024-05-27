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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         ';}H1gq0/v:D8sM%3 rDMa;A}9:5DYVwdo+}X6`e)6+XSN%eK~t`HDKZmNt`WS{^)' );
define( 'SECURE_AUTH_KEY',  'X2}y5Fwf.!-Uds2eRXG^(7mNsH3<t Rs#|Ts& MTCb:vg3tv})[|P<i0Z-ZjhUil' );
define( 'LOGGED_IN_KEY',    '3#5gZ9TewG]I~{GoA[-t[;n@r f9g=ot4u4i}aMu^6#b$s@zk$V3~/=%:pm9/{4T' );
define( 'NONCE_KEY',        'c]P?3pk@4j*N8bRj; r6Fqvh[U1OJAPnv1N<R#_1z{]#&LwP?]Xmn&afKx%-lEH}' );
define( 'AUTH_SALT',        '+HHr${db[(<Z)rR0}~myA0@&1a4gY4Ma;Mfq0J*]%x5}KuAKktpW4FCyNl:}4-wh' );
define( 'SECURE_AUTH_SALT', '4E9VK|3TQSk]i(#=^d}!pOxgNV^>F$,aPmAtt)]e3J`dJSt!Dw=bT_`>mV(pPXQt' );
define( 'LOGGED_IN_SALT',   'R;E:{wPqTJOV>k)Jrs_hj~{#)0N-6qpBg//,+@%?qS8_EB::[i?e1rWcmRJ$>B%<' );
define( 'NONCE_SALT',       ',c#xD)Q{|mK#t>1j4ex9Rxz2D% :3fgt(/KVo.WcZV3``M6>V<]gACpF8$&meqDs' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
