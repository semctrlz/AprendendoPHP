<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    $lembrar = false;
    $login = $_POST['login_nome'];
    $senha = $_POST['login_senha'];
    
    if(isset($_POST['lembrar']))
    {
        $lembrar = true;
    }  

    $BLLUsuario = new BLLUsuario();
    //$BLLUsuario->consultaPorId(1)."<br>";

    $usuario = $BLLUsuario->loga($login, $senha, true);    

    if($usuario->getIdusuario() > 0)
    {
        echo "<H1>USUARIOS</H1>";
        
        $ferramentas = new BLLFerramentas();
        
        echo "Usuario logado ". $ferramentas->nameCase($usuario->getNome()). "<br>";

        
    }
    else
    {
        require_once 'partes'.DIRECTORY_SEPARATOR.'main.php';
    }
    
    /*
    foreach ($usuario as $key => $valor)
    {
        echo "<strong>$key:</strong> $valor <br>";
    }
   */
    