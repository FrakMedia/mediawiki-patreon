<?php
/**
 * Patreon main file that does checking of the user and makes changes to the database as needed.
 * @file Patreon.hooks.php
 * @ingroup Extensions
 * @author Shane A. Froebel
 * @copyright ©2017
 * @license MIT
 */

class PatreonHooks
{

	/**
	 * Adds hooks and adjusts the config once MediaWiki is fully initialised
	 */
	public static function initialize()
	{
		global $wgHooks;
	}

	/**
	 * @param $user
	 * @param $inject_html
	 * @param $direct
	 */
	public static function hookUserLogonComplete(&$user, &$inject_html, $direct)
	{
		return true;
	}

}