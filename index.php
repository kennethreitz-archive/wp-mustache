<?php /*

Plugin Name: Mustache
Plugin URI: http://github.com/bobthecow/mustache.php
Description: Defunkt's Mustache is a framework-agnostic logic-less templating language.
Version: 0.8
Author: Justin Hileman
Author URI: http://justinhileman.com
Min WP Version: 2.0
Max WP Version: 3.5
License: MIT License - http://www.opensource.org/licenses/mit-license.php

Mustache is a framework-agnostic logic-less templating language. It enforces separation of view logic from template files. In fact, it is not even possible to embed logic in the template. 

*/

try {
	require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'mustache'.DIRECTORY_SEPARATOR.'mustache.php'); 
} catch (Exception $e) {
	// Just in case
}