<?php

require __DIR__ . '/vendor/autoload.php';


require 'vendor/autoload.php';
$app = new \Slim\App();

$app->get('/',function() use($app){
  $app->render('index.html');
});
$app->get('/contact',function() use($app){
  $app->render('contact.html');
});

$app->run();


 ?>
