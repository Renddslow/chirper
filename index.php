<?php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app->get('/', function(Silex\Application $app) {
	$output = '<h1>Hello World</h1>';
	return $output;
});

$app->run();
?>
