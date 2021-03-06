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
		'LOG_AJAX_SHOUTBOX_ERROR'    => '<strong>Er is een fout opgetreden tijdens het sturen van het shoutbox bericht naar de extere server</strong>',
		'LOG_AJAX_SHOUTBOX_PRUNED'   => '<strong>Shoutbox opgeruimd en %d berichten verwijderd</strong>',
		'LOG_AJAX_SHOUTBOX_CONFIG_SETTINGS' => '<strong>Ajax shoutbox instellingen gewijzigd</strong>',
		'ACP_AJAX_SHOUTBOX'          => 'Ajax Shoutbox',
		'ACP_AJAX_SHOUTBOX_SETTINGS' => 'Shoutbox instellingen',
	)
);
