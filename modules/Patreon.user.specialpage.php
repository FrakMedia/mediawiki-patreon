<?php
/**
 * Special Page for Patreon checking. This is for all users to check there Patreon status. Users will have to be at least logged in to view there status.
 * @file Patreon.user.specialpage.php
 * @ingroup Extensions
 * @author Shane A. Froebel
 * @copyright ©2017
 * @license MIT
 */

class PatreonUserPage extends SpecialPage
{
	/**
	 * PatreonPage constructor.
	 */
	function __construct()
	{
		parent::__construct('Patreon', '', true);
	}

	function execute($par)
	{
		return true;
	}

	/**
	 * @return string
	 */
	protected function getGroupName()
	{
		return 'users';
	}

}

?>