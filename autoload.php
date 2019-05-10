<?php 
//Agregamos las clases generales
spl_autoload_register(function($nombre_clase){    
    $parts = explode('\\', $nombre_clase);      
    if(count($parts) > 1){        
        if(file_exists(__DIR__ . '/app/Models/' . end($parts) . '.php')){
            include __DIR__ . '/app/Models/' . end($parts) . '.php';
        }else if(file_exists(__DIR__ . '/app')){
            include __DIR__ . '/classes/' . end($parts) . '.php';
        }
    }else{            
        if(file_exists(__DIR__ . '/classes/' . $nombre_clase . '.php')){
            include __DIR__ . '/classes/' . $nombre_clase . '.php';
        }
    }    
}); 
//Agregamos los controllers
spl_autoload_register(function ($clase) {    
    if(file_exists('./app/controllers/page/' . $clase . '.php')){        
        include './app/controllers/page/' . $clase . '.php';
    }
    if(file_exists('./app/controllers/panel/' . $clase . '.php')){        
        include './app/controllers/panel/' . $clase . '.php';
    }
});
//Agregamos los modelos
spl_autoload_register(function ($clase) {
    if(file_exists('./app/Models/' . $clase . '.php'))
        include './app/Models/' . $clase . '.php';
});