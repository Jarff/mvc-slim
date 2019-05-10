<?php

class PPagesController extends Controller{
    public static function index(){
        return self::view('panel/login')->render();
    }
}