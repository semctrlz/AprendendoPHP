
<?php require_once 'includes'.DIRECTORY_SEPARATOR.'config.php'; ?>
<?php
if(isset($_POST['login_nome']) && isset($_POST['login_senha']))
{
    require_once 'partes'.DIRECTORY_SEPARATOR.'loga.php'; 
}
    else
{
    require_once 'partes'.DIRECTORY_SEPARATOR.'main.php';
}
?>
        
        
