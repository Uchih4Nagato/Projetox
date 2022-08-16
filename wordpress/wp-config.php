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
define( 'DB_NAME', 'sitepetz' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'admin' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'web123' );

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
define( 'AUTH_KEY',         'Ml-SQw]>_(zviPK_LV;z$2DMLFR}1_0M-)C@B^]!,9kBd#O8biATZ((YOTrRBI-;' );
define( 'SECURE_AUTH_KEY',  '1=CLuW}^<i,w}`8Fg-C8. Z)&LCpMW`^Ae587+hRbT%2t?GF:fn6hNVpl<Rf|4iy' );
define( 'LOGGED_IN_KEY',    'C<AxBp,O#EK,/v{ze^_qcDk@/JEAs(xH,@_YOSY)>E^_m$Aaw=K;/C+J.*#&N`|X' );
define( 'NONCE_KEY',        '|dKmhvh1{^1,[~tX%Sa&Tp=`#M><. /c9foBnv{YCSC[To]^4MUYI%*t?9.<=@H3' );
define( 'AUTH_SALT',        'y!Q<waX3Q,!tLFjor%h%KC_i,&.0qbrYxD37.B-{%:^hYH.zA>?dhJSq3`qX&ju=' );
define( 'SECURE_AUTH_SALT', '#%IIJ=5QVVABO]P1?%@-0l7bUnf-HQ CXVCVf2Yd`VK(V/$Fd;^)14Z-tM;IEj)v' );
define( 'LOGGED_IN_SALT',   'w t[U,Utarrz5<5M!KcWg %TMw5Fdx5R@c5$,3KQ5@?TcrHoE{?!ESg6lhB=c_#<' );
define( 'NONCE_SALT',       'w[M/UL`:F;;1!o8S;D;6iE{fua!?X<lrenCLkm)]DTt,lcD yM%Z4KFFsj[ydka/' );

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
