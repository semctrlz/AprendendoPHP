<?php

require_once 'DAL.php';

class BLLFerramentas
{
    function nameCase($nome)
    {
        $varName = explode(" ", $nome);
        
        $nomeNovo = "";
        
        foreach ($varName as $value)
        {                        
            if($value != "" && $value != " ")
            {                
                if(strlen($value)>3)
                {
                    $nomeNovo = $nomeNovo. " " .ucfirst($value);
                }
                else
                {
                    $nomeNovo = $nomeNovo . " " . $value;
                }
            }
        }
        
        return $nomeNovo;
        
    }
}

class BLLUsuario
{
    function consultaPorId($ID)
    {
        $DALObj = new DALUsuario();
        $DALObj->consultaPorId($ID);
    }
    
    function loga($usuario, $senha, $obj = bool)
    {
        //Tratamos os valores
        
        //Enviado para o DAL        
        $DALObj = new DALUsuario();
        return $DALObj->loga($usuario, $senha, $obj);
    }
    
}