<?php
/**
 * @package Aus Forminator Addon Userinfo
 * @version 1.0.0
 */
/*
Plugin Name: Forminator Add-on : User Info
Plugin URI: http://wordpress.org/plugins/aus-util/
Description: It records user information on submission and adds an option for [view-only-own-submissions for non-admin users] functon.
Author: Auslee
Version: 1.0.0
Author URI: https://profiles.wordpress.org/auslee986/
*/

$aus__forminator_custom_metas = array(
	array(
		'key' => '_aus_user_email',
		'label' => 'User Email',
	),
	array(
		'key' => '_aus_user_user_login',
		'label' => 'User Login',
	),
	array(
		'key' => '_aus_user_fullname',
		'label' => 'User Full Name',
	),
	array(
		'key' => '_aus_user_displayname',
		'label' => 'User Display Name',
	),
	array(
		'key' => '_aus_user_id',
		'label' => 'User ID',
	),
);

// Include Hooks.
include plugin_dir_path( __FILE__ ) . 'inc/hooks__forminator.php';
