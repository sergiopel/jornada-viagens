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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'jornada-viagens' );

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
define( 'AUTH_KEY',         'H2HVdJt@|^X!Z&UW?,4Lh??0NJv%q /X8c!+Swl2P%+892FPi=OA?S68(fD/d*|W' );
define( 'SECURE_AUTH_KEY',  'AJL`ss2m2A#|(}v&2V8u PpB)8Xv^iG25Sll[5XUL678x(Y7D~-)^KHg .K]Msf`' );
define( 'LOGGED_IN_KEY',    'rbI_WUcr9!Uj/-(6qHDEr<PEcd]JfNc)T lXc]F&}?#57<H-5,S;(8wgXQ=%1nhv' );
define( 'NONCE_KEY',        'N&{qa$&[emFvZQqaPULh}+_ZvI7Ik#KVjclpf>3f+v/W!oU,(D-@_}Jp/f@R:Tiu' );
define( 'AUTH_SALT',        'oKrdekLFlmv)+%csZ_}&~ZZihm D=(HX[e2BdJ2%7]z|gT+#v+bIbI+}X_&j~7Nk' );
define( 'SECURE_AUTH_SALT', ',TYm w-0e7KA,g1R,EW@J;)fXRChBj4t6bz9j[5+~,PAb#lm5zX+-Sdr^FE!F0J`' );
define( 'LOGGED_IN_SALT',   'V}*kA}?6MtL[but&tH]$]jT ^91d(T}jpo1fC;uiRw4#}3%B+{@ur>rc61qhK8ho' );
define( 'NONCE_SALT',       '3:~vg2|efw!DxVs07WFLmT;y=kqun2z[o/8D@68n2qlXR[T,F#F-qj7r^QNfSP8B' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'jvwp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
