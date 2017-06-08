<?php
/**
 * Special Page for Patreon checking. This is for sysops to check a users status. Will match the mediawiki username with Patreon account so sysops can verify that things are working correctly if the user reports any issues. This shows detailed private information so that is why it's restricted to sysops.
 * @file Patreon.sysop.specialpage.php
 * @ingroup Extensions
 * @author Shane A. Froebel
 * @copyright ©2017
 * @license MIT
 */

class PatreonPage extends SpecialPage
{
	/**
	 * PatreonPage constructor.
	 */
	function __construct()
	{
		parent::__construct('Patreon', 'sysop', true);
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