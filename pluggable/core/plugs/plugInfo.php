<?php

class plugInfo {
	private $name;
	private $author;
	private $version;
	
	function __construct($info) {
		$this->name = $info['name'];
		$this->author = $info['author'];
		$this->version = $info['version'];
	}

	
}


?>