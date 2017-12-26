<?php

/**
 * Instantiate the Frame
 *
 * Following $pSetup array elements expected as parameter
 * @param 'namespace' => 'App',
 * @param 'controllers_path' => 'controllers',
 * @param 'themes_path' => 'themes',
 * @param 'modules_path' => 'modules',
 * @param 'default_theme' => 'default',
 * @param 'cookie_name' => 'your_choice_name',
 * @param 'server' => ''
 * @param 'database' => ''
 * @param 'username' => ''
 * @param 'password' => ''
 * @param 'models_path' => 'models'
 * @param 'entities_path' => 'entities'
 * @param 'cache_path' => 'cache_path'
 * @param 'events_hook' => null
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
		'auto_route'		 => 1,
		'server'			 => '',
		'database'			 => '',
		'username'			 => '',
		'password'			 => '',
		'models_path'		 => 'models',
		'entities_path'		 => 'entities',
		'events_hook'		 => null
	];
}
