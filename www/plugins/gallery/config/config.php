<?php
/**
 * Конфиг
 */

$config = array();

// Переопределить имеющуюся переменную в конфиге:
// Переопределение роутера на наш новый Action - добавляем свой урл  http://domain.com/Gallery
// Config::Set('router.page.Gallery', 'PluginGallery_ActionGallery');

// Добавить новую переменную:
// $config['per_page'] = 15;
// Эта переменная будет доступна в плагине как Config::Get('plugin.Gallery.per_page')

Config::Set('router.page.gallery', 'PluginGallery_ActionGallery');

$config['block']['rule_profile'] = array(
	'action'  => array( 'gallery'),
	'blocks'  => array( 'right' => array('actions/ActionProfile/sidebar.tpl') ),
);


return $config;
