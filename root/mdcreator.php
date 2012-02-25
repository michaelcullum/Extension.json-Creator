<?php
/**
*
*
* @package Meta-data file Creator
* @copyright (c) 2012 phpBB Group
* @author Michael Cullum (Unknown Bliss of http://michaelcullum.com)
* @license http://opensource.org/licenses/gpl-2.0.php GNU Public License
*
*/

/**
* @ignore
*/
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);

// Language
$user->setup('mdcreator');

// Page title
page_header($user->lang['MD_CREATOR']);

// Breadcrumbs
$template->assign_block_vars('navlinks', array(
            'FORUM_NAME'         => ($user->lang['MD_CREATOR']),
            'U_VIEW_FORUM'      => append_sid("{$phpbb_root_path}mdcreator.$phpEx"))
);

$template->set_filenames(array(
    'body' => 'md_creator.html',
));

// Display page
page_footer();

?>