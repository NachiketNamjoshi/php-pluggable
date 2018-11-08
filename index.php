<?php

require_once('config.php');

$userindex = $GLOBALS['config']['app']['path'].$GLOBALS['config']['app']['index'];
$url = getBaseURL()."/".$userindex;
// echo $url;
header('Location: '.$url);


?>