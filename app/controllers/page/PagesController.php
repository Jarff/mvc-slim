<?php

class PagesController extends Controller{
    public static function index(){
        return self::view('page/home')->render();
    }

    public static function about(){
        $data = ['message' => 'hola mundo maldito'];
        return self::view('page/about')->with($data)->render();
    }
}