<?php

/**
 * Plugs Manager
 */
class plugsManager {

	var $registered_plugs = array();
	

	function __construct() {
		if(isset($GLOBALS['config']['coreConfig']['registered_plugs'])) {
			$this->registered_plugs = $GLOBALS['config']['coreConfig']['registered_plugs'];
		}
	}
	


	public function registerPlug($plugInfo) {
		array_push($this->registered_plugs, $plugInfo);
		$GLOBALS['config']['coreConfig']['registered_plugs'] = $this->registered_plugs;
	}
}

?>