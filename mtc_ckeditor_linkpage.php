<?php
/*
Plugin Name: MTC CKEditor Link Page
Plugin URI: http://www.microtekcorporation.com/wordpress-plugins/mtc-ckeditor-link-page
Description: Allows you to link to a specific wordpress page
Version: 1.0.1
Author: Joshua Hyatt - Microtek Corporation
Author URI: http://www.microtekcorporation.com
*/

require_once('mtc_ckeditor_linkpage_class.php');
add_filter( 'ckeditor_external_plugins', array(&$mtc_ckeditor_linkpage, 'ckeditor_plugin') );
add_filter( 'ckeditor_buttons', array(&$mtc_ckeditor_linkpage, 'ckeditor_buttons') );