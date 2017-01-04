<?php
/**
*
* @package phpBB Extension - Link menu
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* Nederlandse vertaling @ Solidjeuh <http://www.froddelpower.be> 
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_LINKMENU'						=> 'Simpel link menu',
	'ACP_LINKMENU_SETTINGS'				=> 'Link menu instellingen',
	'ACP_LINKMENU_CONFIG_SETTINGS'		=> 'Instellingen',
	'ACP_LINKMENU_CONFIG_SET'			=> 'Configuratie',
	'ACP_LINKMENU_CONFIG_SAVED'			=> 'Link menu instellingen opgeslagen',
	'ACP_LINKMENU_VERSION'				=> 'Versie',
	'ACP_LINKMENU_CREDITS'				=> 'Extensie gemaakt door <a href="http://www.dmzx-web.net"><strong>dmzx</strong></a>',
	'ACP_LINKMENU_ENABLE'				=> 'Schakel link menu in',
	'ACP_LINKMENU_ENABLE_EXPLAIN'				=> 'Zet link menu extensie aan in de header.',
	'ACP_LINKMENU_ENABLE_FIRST'					=> 'Zet eerste link aan ',
	'ACP_LINKMENU_ENABLE_FIRST_EXPLAIN'			=> 'Schakel de eerste link in.',
	'ACP_LINKMENU_NAME_FIELD_FIRST'				=> 'Naam van de eerste site',
	'ACP_LINKMENU_NAME_FIELD_FIRST_EXPLAIN'		=> 'Plaats de naam van de eerste site.',
	'ACP_LINKMENU_TEXT_FIELD_FIRST'				=> 'URL van de eerste site',
	'ACP_LINKMENU_TEXT_FIELD_FIRST_EXPLAIN'		=> 'Plaats de url van de eerste site.',
	'ACP_LINKMENU_ENABLE_SECOND'				=> 'Zet tweede link aan',
	'ACP_LINKMENU_ENABLE_SECOND_EXPLAIN'		=> 'Schakel de tweede link in.',
	'ACP_LINKMENU_NAME_FIELD_SECOND'			=> 'Naam van de tweede site',
	'ACP_LINKMENU_NAME_FIELD_SECOND_EXPLAIN'	=> 'Plaats de naam van de tweede site.',
	'ACP_LINKMENU_TEXT_FIELD_SECOND'			=> 'URL van de tweede site',
	'ACP_LINKMENU_TEXT_FIELD_SECOND_EXPLAIN'	=> 'Plaats de url van de tweede site.',
	'ACP_LINKMENU_ENABLE_THIRD'					=> 'Zet derde link aan',
	'ACP_LINKMENU_ENABLE_THIRD_EXPLAIN'			=> 'Schakel de derde link in.',
	'ACP_LINKMENU_NAME_FIELD_THIRD'				=> 'Naam van de derde site',
	'ACP_LINKMENU_NAME_FIELD_THIRD_EXPLAIN'		=> 'Plaats de naam van de derde site.',
	'ACP_LINKMENU_TEXT_FIELD_THIRD'				=> 'Link van de derde site',
	'ACP_LINKMENU_TEXT_FIELD_THIRD_EXPLAIN'		=> 'Plaats de url van de derde site.',
));