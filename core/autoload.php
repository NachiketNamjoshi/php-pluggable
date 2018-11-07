<?php
	require_once('coreConfig.php');
	foreach ($GLOBALS['config']['installed_plugs'] as $plug) {
			$plugPath = getcwd().$GLOBALS['config']['coreConfig']['plugsPath'].$plug;
			if(file_exists($plugPath."/autoload.php")) {
				require_once($plugPath."/autoload.php");
			} else {
				die("Cannot Find Plug: ".$plug);
			}
		}
	


?>