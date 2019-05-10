<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


$app->get('/panel/', function(Request $request, Response $response){
    PPagesController::index();
});

$app->post('/panel/login', function(Request $request, Response $response){
   $json = $request->getParsedBody();
   print_r($json); 
});