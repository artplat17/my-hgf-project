<?php
/**
 *
 * Guest Content Hide. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, Andres, https://www.andreszsogon.com
 * @license GNU General Public License, version 2 (GPL-2.0)
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

	'ACP_GCH_TITLE'			=> 'Guest Content Hide',
	'ACP_GCH_DETAILS'		=> 'Aquí puedes seleccionar el contenido de los mensajes que deseas ocultar a los invitados o robots.',
	'ACP_GCH_SETTINGS'		=> 'Configuración',
	'ACP_GCH_SETTING_SAVED'	=> 'Configuración actualizada correctamente!',

	'ACP_GCH_GUESTS'		=> 'Invitados',
	'ACP_GCH_BOTS'			=> 'Robots',
	'ACP_GCH_REFERENCE'		=> 'Referencias',
	'ACP_GCH_ABOUT'			=> 'Acerca de GCH',

	'ACP_GCH_POST_IMG'		=> 'Mensajes con imágenes',
	'ACP_GCH_POST_URL'		=> 'Mensajes con enlaces',
	'ACP_GCH_ATTACHMENTS'	=> 'Adjuntos en mensajes',
	'ACP_GCH_SIGNATURES'	=> 'Firmas de usuario en mensajes',
	'ACP_GCH_VISIBLE'		=> 'Mostrar',
	'ACP_GCH_HIDDEN'		=> 'Ocultar',
	'ACP_GCH_HIDE_IMG'		=> 'Ocultar imágenes',
	'ACP_GCH_HIDE_URL'		=> 'Ocultar enlaces',
	'ACP_GCH_HIDE_POST'		=> 'Ocultar contenido del mensaje',

	'ACP_GCH_INFO_IMG'		=> 'La opción <i>Ocultar imágenes</i> reemplazará las imágenes por este mensaje',
	'ACP_GCH_INFO_URL'		=> 'La opción <i>Ocultar enlaces</i> reemplazará los enlaces por este mensaje',
	'ACP_GCH_INFO_POST'		=> 'La opción <i>Ocultar contenido del mensaje</i> reemplazará todo el contenido del mensaje por este',

	'ACP_GCH_DISCUSS'		=> 'Para comprobar que tienes la última versión, sugerir mejores o reportar errores, por favor visita la página de la extensión GCH en phpBB.',
	'ACP_GCH_GITHUB'		=> 'Puedes mejorar esta extensión creando un PR (Pull Request) en GitHub directamente.',

	'GCH_HIDDEN_URL'		=> '[Por favor ingresa o registrate ahora para ver este enlace]',
	'GCH_HIDDEN_IMG'		=> '[Por favor ingresa o registrate ahora para ver esta imagen]',
	'GCH_HIDDEN_POST'		=> '[<strong>Atención:</strong> Este mensaje solo está visible para usuarios registrados. Por favor ingresa o registrate ahora para continuar.]',

));
