<?php
/**
 *
 * @package titania
 * @version $Id$
 * @copyright (c) 2008 phpBB Customisation Database Team
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 */

/**
* @ignore
*/
if (!defined('IN_TITANIA'))
{
	exit;
}

titania_display_contribs('author', titania::$author->user_id);

titania::page_header('AUTHOR_CONTRIBUTIONS');
titania::page_footer(true, 'authors/author_contributions.html');