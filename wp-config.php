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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'bulkdesign');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

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
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '_j,MwbD^mr$w#`9|{.?&53P:7S}nGxzdD:@C?*Ltc892`I!B/y%tMGwFI}nXz^O.');
define('SECURE_AUTH_KEY',  '`.0}d,D2O2),xnUhB:q37O.fn<zS[X54h`?,Ssb@1TfPrn7^* gg5Rjvn<sk0Y<[');
define('LOGGED_IN_KEY',    'm]<?~dMvnaS|lN(c!ZQu*?K19DQJjM}[j^~dQ@8A;ZF1[.Cvd0]|7XA)ZM |FSbn');
define('NONCE_KEY',        'dgY%+8`$sI&=F*u#$MVs+%8h2p/J^S8F(s()*3$I~b:P0N2cSa{;<DbGWD2IbFp@');
define('AUTH_SALT',        'ls9gy0-4:ipe$^{Lf1Ld!u3a%Xd*8+.B<<8+bN)xOm[d)*)<%#g]00EF=0Xrn?~s');
define('SECURE_AUTH_SALT', 'zl_Z0gj+qv.X~&L^RiQ6LH:mg]I_,VB?F?n_a%jT5<L#vaY@._T)g;/IMxWSr5ch');
define('LOGGED_IN_SALT',   ')rwD;sViZ[??Cx89?1Pli3w#g&yCyQ{D&U(qq!4/YKY>y/e_@ZYR,RnX^~Hu{gG|');
define('NONCE_SALT',       'O!YRA[5T?/J-:}>oHblG3y(Qg8iy5fR]QNw!4Z_vfU3fTY=N^_(+?CpW*c!DN+=a');

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
