<?php
/**
*
* @package phpBB Extension - Google Search
* @copyright (c) 2015 HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/


/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
   exit;
}

if (empty($lang) || !is_array($lang))
{
   $lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(

   'GOOGLE'                            => 'Google',
   'GOOGLE_SEARCH'                     => 'Pesquisar com Google ...',
   'SEARCH_GOOGLE'                     => 'Pesquisar com Google',

   'GOOGLESEARCH_NAVBAR'               => 'Barra de Navegação',
   'GOOGLESEARCH_HEADER'               => 'Topo',
   'GOOGLESEARCH_INDEX'                => 'Índice',

   'ACP_GOOGLESEARCH_CONFIG'           => 'Pesquisar com Google',
   'ACP_GOOGLESEARCH_CONFIG_EXPLAIN'   => 'Esta é a página de configuração da extensão Pesquisar com Google.',
   'GOOGLESEARCH_VERSION'              => 'Versão',

   'ACP_GOOGLESEARCH_CONFIG_SET'       => 'Configuração',
   'GOOGLESEARCH_CONFIG_SAVED'         => 'Configurações salvas com sucesso',

   'GOOGLESEARCH_CUSTOM'               => 'Pesquisa Personalizada Google',

   'GOOGLESEARCH_NOSCRIPT'             => 'Javascript deve estar habilitado e o Google desativado em bloqueador de anúncios para poder visualizar os resultados da pesquisa personalizada do Google',

   'GOOGLESEARCH_POSITION'             => 'Posição da Pesquisa Google',
   'GOOGLESEARCH_POSITION_EXPLAIN'     => 'Você deseja exibir a Pesquisa na barra de navegação ou no topo?',


   'GOOGLESEARCH_CUSTOM_CODE'                   => 'Código Personalizado',
   'GOOGLESEARCH_CUSTOM_CODE_EXPLAIN'           => 'Você pode substituir este código padrão com seu próprio Search Engine ID se desejar',
   'GOOGLESEARCH_CUSTOM_CODE_PLACEHOLDER'       => 'ID da Search Engine',

   'GOOGLESEARCH_VERIFICATION_CODE'                => 'Verificação do Google Webmaster Tools',
   'GOOGLESEARCH_VERIFICATION_CODE_EXPLAIN'        => 'Você pode inserir o seu Google Verification Code aqui se desejar',
   'GOOGLESEARCH_VERIFICATION_CODE_PLACEHOLDER'    => 'Google Verification Code',


));

