<?php
if (!defined('AT_INCLUDE_PATH')) { exit; }

// if this module is to be made available to students on the Home or Main Navigation
$_student_tools = array('mods/hello_world/index.php');

// adding this module to the main page as a basic student tool:
$_module_pages['mods/hello_world/index.php']['title']    = 'Hello World';
$_module_pages['mods/hello_world/index.php']['img']      = 'mods/hello_world/images/hello_world.png';
$_module_pages['mods/hello_world/index.php']['children'] = array('mods/hello_world/subpage.php');

	$_module_pages['mods/hello_world/subpage.php']['title']   = 'Good-bye';
	$_module_pages['mods/hello_world/subpage.php']['parent']  = 'mods/hello_world/index.php';

// adding this modeul's instructor page to the course Manage page:
$_module_pages['mods/hello_world/instructor/index.php']['title']     = 'Hello World';
$_module_pages['mods/hello_world/instructor/index.php']['parent']    = 'tools/index.php';

?>