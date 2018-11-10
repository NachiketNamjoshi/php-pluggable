<?php

function getBaseURL() {
	return str_replace("\\",'/',"http://".$_SERVER['HTTP_HOST'].substr(getcwd(),strlen($_SERVER['DOCUMENT_ROOT'])));
}

function getFileURL($fileDirPath) {
	return substr($fileDirPath, strlen(getcwd()));
}

function buildURL($fragments) {
	$path = getBaseURL();
	foreach ($fragments as $fragment) {		
		$fments = explode('/', $fragment);
		foreach ($fments as $fment) {
			if($fment === '')
				continue;
			if($fment === getBaseURL())
				die('Invalid Arguments! Give relative path from root.');
			$path .= "/".$fment;
		}
	}
	return $path;
}


function includeDir($path) {
    $dir      = new RecursiveDirectoryIterator($path);
    $iterator = new RecursiveIteratorIterator($dir);
    foreach ($iterator as $file) {
        $fname = $file->getFilename();
        if (preg_match('%\.php$%', $fname)) {
            require_once($file->getPathname());
        }
    }
}
?>