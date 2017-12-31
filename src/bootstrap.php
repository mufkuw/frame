<?php

use Mvc\{
	Router, Controller, Context, Hook
};

define('FRAME_ROOT', __DIR__ . DS);
define('FRAME_CONTROLLERS', FRAME_ROOT . 'controllers' . DS);
define('FRAME_CONFIG', FRAME_ROOT . 'config' . DS);
define('FRAME_CLASSES', FRAME_ROOT . 'classes' . DS);
define('FRAME_MEDIA', FRAME_ROOT . 'media' . DS);
define('FRAME_TEMPLATES', FRAME_ROOT . 'templates' . DS);
define('FRAME_CLASS_INDEX_JSON', FRAME_CONFIG . 'class_index.json');

/**
 * Pre loading required classes
 */
preload(FRAME_CLASS_INDEX_JSON, FRAME_CLASSES, FRAME_CONTROLLERS);

/**
 * Instantiate the Frame
 *
 * Following $pSetup array elements expected as parameter
 * @param 'namespace' => 'App',
 * @param 'server' => ''
 * @param 'database' => ''
 * @param 'username' => ''
 * @param 'password' => ''
 * @param 'controllers_path' => 'controllers',
 * @param 'themes_path' => 'themes',
 * @param 'modules_path' => 'modules',
 * @param 'default_theme' => 'default',
 * @param 'cookie_name' => 'your_choice_name',
 * @param 'models_path' => 'models'
 * @param 'entities_path' => 'entities'
 * @param 'cache_path' => 'cache_path'
 * @param 'entity_hook_call' => null
 * @param 'routes' => '[
 * 		'name' => 'routename',
 * 		'pattern' => 'regex',
 * 		'defaults' => [
 * 				controller =>''
 * 				action =>''
 * 				action_id =>''
 * 				module =>''
 * 				module_controller =>''
 * 				module_action =>''
 * 				module_action_id =>''
 * 			],
 * 	]',
 */
function frame_init($pSetup = []) {
	$default_setup = [
		'namespace'			 => 'App',
		'cache_path'		 => 'cache',
		'controllers_path'	 => 'controllers',
		'themes_path'		 => 'themes',
		'modules_path'		 => 'modules',
		'default_theme'		 => 'default',
		'auto_disptach'		 => 0,
		'server'			 => '',
		'database'			 => '',
		'username'			 => '',
		'password'			 => '',
		'models_path'		 => 'models',
		'entities_path'		 => 'entities',
		'entity_hook_call'	 => null
	];

	$pSetup = array_merge($default_setup, $pSetup);

	entities_init($pSetup);

	mvc_init($pSetup);


	$hookable_classes = array_filter(get_declared_classes(), function($c) {
		return preg_match_all('/Controllers\\\\.+Controller/', $c);
	});

	foreach ($hookable_classes as $class) {
		Hook::autoRegister($class::instance());
	}


	Context::instance()->search_sequence_controllers_namespaces[]	 = '\\Frame\\Controllers';
	Context::instance()->search_sequence_templates[]				 = FRAME_TEMPLATES;
	Context::instance()->search_sequence_media[]					 = FRAME_MEDIA;
}
