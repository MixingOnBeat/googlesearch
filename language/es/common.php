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
   'GOOGLE_SEARCH'                     => 'Busqueda de Google...',
   'SEARCH_GOOGLE'                     => 'Busqueda de Google',

   'GOOGLESEARCH_NAVBAR'               => 'Barra',
   'GOOGLESEARCH_HEADER'               => 'Encabezado',
   'GOOGLESEARCH_INDEX'                => 'Índice',

   'ACP_GOOGLESEARCH_CONFIG'           => 'Busqueda de Google',
   'ACP_GOOGLESEARCH_CONFIG_EXPLAIN'   => 'Esta es la pagina de configuracion de la extension Busqueda de Google.',
   'GOOGLESEARCH_VERSION'              => 'Versión',

   'ACP_GOOGLESEARCH_CONFIG_SET'       => 'Configuración',
   'GOOGLESEARCH_CONFIG_SAVED'         => 'Ajustes de Busqueda de Google guardados',

   'GOOGLESEARCH_CUSTOM'               => 'Busqueda de Google personalizado',

   'GOOGLESEARCH_NOSCRIPT'             => 'JavaScript debe estar habilitado y Google en la lista blanca con el fin de ver los resultados de búsqueda personalizada de Google',

   'GOOGLESEARCH_POSITION'             => 'Posicion de Busqueda de Google',
   'GOOGLESEARCH_POSITION_EXPLAIN'     => '¿Dondé quiere mostrar la búsqueda en la barra o encabezado?',


   'GOOGLESEARCH_CUSTOM_CODE'                   => 'Codigo personalizado',
   'GOOGLESEARCH_CUSTOM_CODE_EXPLAIN'           => 'Puede reemplazar este código por defecto con su propio ID del motor de búsqueda si lo desea',
   'GOOGLESEARCH_CUSTOM_CODE_PLACEHOLDER'       => 'ID del motos de búsqueda',

   'GOOGLESEARCH_VERIFICATION_CODE'                => 'Verificacion de Google Webmaster Tools',
   'GOOGLESEARCH_VERIFICATION_CODE_EXPLAIN'        => 'Puede introducir su código de verificación de Google aquí si lo desea',
   'GOOGLESEARCH_VERIFICATION_CODE_PLACEHOLDER'    => 'Código de verificación de Google',
));
