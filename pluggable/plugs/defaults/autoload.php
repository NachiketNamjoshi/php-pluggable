<?php 

$defaults = array (
	'dbutils'
);

if(!empty($defaults)) {
	foreach ($defaults as $defaultPlug) {
		require_once($defaultPlug."/autoload.php");
	}
}

?>