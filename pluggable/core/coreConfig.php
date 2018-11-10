<?php
require_once('utils/paths.php');

$GLOBALS['config']['coreConfig'] = array(
	'plugsPath' => 'plugs/',
	'pluggableStatus' => 'BAD',
	'paths' => array(
		'plugs' => 'plugs/',
		'utils' => 'utils/'
	)
);

foreach ($GLOBALS['config']['coreConfig']['paths'] as $key => $value) {
	includeDir(__DIR__."/".$value);
}

?>