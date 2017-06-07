<?php
/**
 * Patreon API Services
 * Adds the ability to link your MediaWiki users to their Patreon Accounts
 * to give them certain rights and priviliges for your MediaWiki Installation.
 *
 * @license          MIT
 * @package          Patreon
 * @link             https://github.com/FrakMedia/mediawiki-patreon
 *
 **/

if (function_exists('wfLoadExtension')) {
	wfLoadExtension('Patreon');
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['Patreon'] = __DIR__ . '/i18n';
	wfWarn(
		'Deprecated PHP entry point used for Patreon extension. Please use wfLoadExtension instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	return;
} else {
	die('This version of the Patreon extension requires MediaWiki 1.25+');
}

?>