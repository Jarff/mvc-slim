<?php

class View{
    var $page_url;
    var $data;
    private $dir = './src/views/';

    public function __contruct($page_url, $request = ''){   
        $this->page_url = $page_url;   
        return $this;
    }

    public function render(){  
        if(file_exists( $this->dir . $this->page_url . '.php' )){
            require_once( $this->dir . $this->page_url . '.php' );
        }else{
            return $this->error();
        }
    }

    public function with($data){
        $this->data = $data;
        return $this;
    }

    private function error(){
        echo $this->dir . $this->page_url . '.php' . ", doesn't exist.";
    }
}