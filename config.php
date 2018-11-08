<?php

$GLOBALS['config'] = array(
	'app' => array(
		'path' => 'app/',
		'index' => 'index.php'
	),
	'corePath' => 'core/',
	'installed_plugs' => array(
	),
);


require_once($GLOBALS['config']['corePath'].'autoload.php');
?>