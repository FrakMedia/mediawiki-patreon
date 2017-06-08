<?php
/**
 * Special Page for Patreon
 * @file
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