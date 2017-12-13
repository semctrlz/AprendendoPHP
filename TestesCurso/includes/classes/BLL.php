<?php

require_once 'DAL.php';

class BLLFerramentas
{
    function namecase($nome)
    {        
        $nomearrumado = html_entity_decode($nome);
        
        $varName = explode(" ", $nomearrumado);
        
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
    
    function deHtmlParaAscento($string):string
    {
        $retorno = html_entity_decode($string);
        
        return $retorno;
    }    
    function deAscentoParaHtml($string):string
    {
        $retorno = htmlentities($string);
        
        return $retorno;
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