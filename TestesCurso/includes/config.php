<?php

//Realiza o Require_once automaticamente ao instanciar um objeto (Atenção nos nomes dos objetos
spl_autoload_register(function($className){
   
    //Inclui arquivos do includes cujos nomes sejam o mesmo nome da classe
    $includes = "includes".DIRECTORY_SEPARATOR.$className.".php";
    
    //Inclui arquivos do partes cujos nomes sejam o mesmo nome da classe
    $partes = "partes".DIRECTORY_SEPARATOR.$className.".php";
    
    //Inclui arquivos do includes/classes cujos nomes sejam o mesmo nome da classe
    $classes = "includes".DIRECTORY_SEPARATOR."classes".DIRECTORY_SEPARATOR.$className.".php";
    
    //Inclui arquivos do includes cujos nomes sejam agrupados pelas 3 primeiras letras (Ex: CONEmail, CONIdioma)
    $includes3 = "includes".DIRECTORY_SEPARATOR.substr($className, 0, 3).".php";
    
    //Inclui arquivos do includes/classes cujos nomes sejam agrupados pelas 3 primeiras letras (Ex: DTOUsuario, DALUsuario)
    $classes3 = "includes".DIRECTORY_SEPARATOR."classes".DIRECTORY_SEPARATOR.substr($className, 0, 3).".php";
    
    if(file_exists($includes)){
        require_once($includes);        
    }
    
    if(file_exists($partes)){
        require_once($partes);        
    }
    
    if(file_exists($classes)){
        require_once($classes);        
    }
    
    if(file_exists($includes3)){
        require_once($includes3);        
    }
    
    if(file_exists($classes3)){
        require_once($classes3);        
    }   
    
});