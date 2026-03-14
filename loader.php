<?php
DEFINE('SITENAME', pathinfo(SITEPATH, PATHINFO_FILENAME));
DEFINE('NETWORKPATH', __DIR__);
DEFINE('NETWORKNAME', pathinfo(NETWORKPATH, PATHINFO_FILENAME));

include_once __DIR__ . '/../../spring/entry.php';

variables([
	'network' => 'Common Planet'
]);

disk_include_once(__DIR__ . '/network.php');

runFrameworkFile('site/begin');
