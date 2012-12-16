<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:			Social Igniter : App Template : Install
* Author: 		Brennan Novak
* 		  		contact@social-igniter.com
*          
* Created: 		Brennan Novak
*
* Project:		http://social-igniter.com/
* Source: 		http://github.com/socialigniter/app-template
*
* Description: 	Install values for App Template for Social Igniter 
*/

/* Settings */
$config['little-brother_settings']['enabled']				= 'TRUE';
$config['little-brother_settings']['create_permission'] 	= '3';
$config['little-brother_settings']['publish_permission']	= '2';
$config['little-brother_settings']['manage_permission']		= '2';
$config['little-brother_settings']['comments_per_page']		= '5';
$config['little-brother_settings']['comments_allow']		= 'no';

/* Folders */
$config['media_folders'] 							= array('images','audio','video');