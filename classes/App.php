<?php
namespace Locker;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class App{
    private static $config = [
        'settings' => [
            'displayErrorDetails' => true
        ]
    ];
    
    public static function play(){
        $app = new \Slim\App(self::$config);
        if(file_exists(__DIR__.'/../routes')){
            $items = scandir(__DIR__.'/../routes');
            for($i = 2; $i < ( count($items) ); $i++){                
                require_once('./routes/'.$items[$i]);
            }
            $app->run();
        }else{
            echo 'missing /routes folder';
        }
    }
}