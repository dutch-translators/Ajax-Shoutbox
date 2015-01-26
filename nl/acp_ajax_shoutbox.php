<?php
/**
 *
 * Ajax Shoutbox extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2014 Paul Sohier <http://www.ajax-shoutbox.com>
 * Dutch translation by Dutch Translators (https://github.com/dutch-translators)
 * @license       GNU General Public License, version 2 (GPL-2.0)
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
$lang = array_merge(
	$lang, array(
		'ACP_AJAXSHOUTBOX_SETTINGS'     => 'Ajax Shoutbox instellingen',
		'ACP_AJAXSHOUTBOX_SETTINGS_EXPLAIN'     => 'Op deze pagina kan je de instellingen van de Ajax Shoutbox wijzigen. <br /><br />
			Als je jouw leden gebruik wil laten maken van de iOS en android APPs (Momenteel nog niet beschikbaar en in BETA, maar gebruikers kunnen de APP wel gebruiken voor
			jouw forum als ze toegang hebben tot de beta.
			Kijk <a href="http://www.ajax-shoutbox.com/viewtopic.php?f=2&t=9">hier</a> voor meer informatie), je moet een account aanmaken op
			<a href="https://www.shoutbox-app.com/">www.shoutbox-app.com</a> en een nieuw forum toevoegen. Er zal gevraagd worden om een activatiecode. Deze code is beneden te vinden.
		',
		'ACP_AJAXSHOUTBOX_PRUNE'        => 'Opruim instellingen',
		'AJAXSHOUTBOX_ENABLE_PRUNE'     => 'Opruimen van berichten inschakelen',
		'AJAXSHOUTBOX_PRUNE_DAYS'       => 'Ruim berichten op na',
		'ACP_AJAXSHOUTBOX_PUSH'         => 'App configuratie',
		'AJAXSHOUTBOX_ACTIVATION_KEY'   => 'Activatie code',
		'ACP_AJAXSHOUTBOX_ENABLE_PUSH'  => 'Activeer android en iOS app',
		'ACP_AJAXSHOUTBOX_ENABLE_PUSH_EXPLAIN'  => 'Voordat je jouw site kan registreren, moet je deze functie inschakelen.',
		'ACP_AJAXSHOUTBOX_API_KEY_PUSH' => 'API Sleutel',
		'ACP_AJAXSHOUTBOX_API_KEY_PUSH_EXPLAIN' => 'Je zult deze sleutel ontvangen na het registreren op www.shoutbox-app.com',
		'ACP_AJAXSHOUTBOX_CON_KEY_PUSH' => 'Connectie ID',
		'ACP_AJAXSHOUTBOX_CON_KEY_PUSH_EXPLAIN' => 'Je zult deze sleutel ontvangen na het registreren op www.shoutbox-app.com.<br />Jouw leden gebruiken dit ID om jouw forum te vinden in de APP.',
	)
);
