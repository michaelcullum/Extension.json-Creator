<?php
/**
*
* Meta-data file Creator
*
* @package language
* @copyright (c) 2012 phpBB Group
* @author Michael Cullum (Unknown Bliss of http://michaelcullum.com)
* @license http://opensource.org/licenses/gpl-2.0.php GNU Public License
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

$lang = array_merge($lang, array(
    'MD_CREATOR'        	=> 'Meta-data File Creator',
    'EXTENSION'            	=> 'Extension',
	
    'NAME'        			=> 'Extension Name*',
    'AUTHOR'       			=> 'Extension Authors*',
    'TYPE'        			=> 'Extension Type*',
    'DESCRIPTION'           => 'Extension Description*',
    'HOMEPAGE'     			=> 'Extension Homepage',
    'VERSION'        		=> 'Extension Version*',
    'TIME'        			=> 'Extension Time',
    'LICENCE'           	=> 'Extension Licence*',
    'AUTHOR_NAME'       	=> 'Author Name*',
    'AUTHOR_USERNAME'     	=> 'Author Username*',
    'AUTHOR_EMAIL'        	=> 'Author Email',
    'AUTHOR_HOMEPAGE'       => 'Author Homepage',
    'AUTHOR_TYPE'        	=> 'Author Type',
    'REQUIRE_PHP'        	=> 'Extension PHP Requirement',
	'REQUIRE_PHPBB'         => 'Extension phpBB Target Version*',
    'EXTRA_DISPLAYNAME'     => 'Extension Display Name*',
	
	'REQUIRED_NOTICE'		=> 'NOTE: Fields with a star by the name are required, others are not.',

));

?>