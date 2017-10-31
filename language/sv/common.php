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
   'GOOGLE_SEARCH'                     => 'Google Sök ...',
   'SEARCH_GOOGLE'                     => 'Google Sök',

   'GOOGLESEARCH_NAVBAR'               => 'Navbar',
   'GOOGLESEARCH_HEADER'               => 'Header',
   'GOOGLESEARCH_INDEX'                => 'Index',

   'ACP_GOOGLESEARCH_CONFIG'           => 'Google Sök',
   'ACP_GOOGLESEARCH_CONFIG_EXPLAIN'   => 'Detta är konfigurationssidan för Google Sök extension. .',
   'GOOGLESEARCH_VERSION'              => 'Version',

   'ACP_GOOGLESEARCH_CONFIG_SET'       => 'Konfiguration',
   'GOOGLESEARCH_CONFIG_SAVED'         => 'Google Sök inställningarna sparades',

   'GOOGLESEARCH_CUSTOM'               => 'Anpassad Google Sök',

   'GOOGLESEARCH_NOSCRIPT'             => 'JavaScript måste vara aktiverat och Google vitlistade för att visa anpassad Google sökresultat',

   'GOOGLESEARCH_POSITION'             => 'Google Sök Position',
   'GOOGLESEARCH_POSITION_EXPLAIN'     => 'Vill du visa Google Sök i NavBar eller i Headern?',


   'GOOGLESEARCH_CUSTOM_CODE'                   => 'Anpassad kod',
   'GOOGLESEARCH_CUSTOM_CODE_EXPLAIN'           => 'Du kan ersätta denna standardkod med din egen sökmotor-ID om du vill',
   'GOOGLESEARCH_CUSTOM_CODE_PLACEHOLDER'       => 'Sökmotor ID',

   'GOOGLESEARCH_VERIFICATION_CODE'                => 'Google Webmaster Tools Verifiering',
   'GOOGLESEARCH_VERIFICATION_CODE_EXPLAIN'        => 'Du kan ange din Google verifikationskod här om du vill',
   'GOOGLESEARCH_VERIFICATION_CODE_PLACEHOLDER'    => 'Google verifikationskod',


));