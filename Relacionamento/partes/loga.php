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

    echo "<H1>USUARIOS</H1>";        

    if($usuario->getIdusuario() > 0)
    {
        $ferramentas = new BLLFerramentas();
        
        echo "Usuario logado ". htmlspecialchars($ferramentas->nameCase($usuario->getNome()));
    }
    else
    {
        require_once('main.pgp');
    }
    
    /*
    foreach ($usuario as $key => $valor)
    {
        echo "<strong>$key:</strong> $valor <br>";
    }
   */
    