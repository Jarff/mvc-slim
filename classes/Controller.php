<?php 
class Controller{
    protected static $request;
    private static $_view;

    public static function view($_page){
        self::$_view = new View($_page);   
        self::$_view->page_url = $_page;       
        return self::$_view;
    }
}