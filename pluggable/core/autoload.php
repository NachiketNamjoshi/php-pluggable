<?php
	require_once('coreConfig.php');
	$size = count($GLOBALS['config']['installed_plugs']);
	foreach ($GLOBALS['config']['installed_plugs'] as $plug) {
		$plugPath = getcwd()."/pluggable/".$GLOBALS['config']['coreConfig']['plugsPath'].$plug;
		$size--;
		if(file_exists($plugPath."/autoload.php")) {
			require_once($plugPath."/autoload.php");
		} else {
			die("Cannot Find Plug: ".$plug);
		}
		if($size <= 0) {
			$GLOBALS['config']['coreConfig']['pluggableStatus'] = 'OK';
		}

	}

	
	
?>