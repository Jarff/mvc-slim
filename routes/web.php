<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


$app->get('/', function(Request $request, Response $response){
    PagesController::index();
});

$app->get('/about', function(Request $request, Response $response){
    PagesController::about();
});