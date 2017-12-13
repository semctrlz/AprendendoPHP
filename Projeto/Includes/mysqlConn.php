<?php 

if (!$link = mysql_connect('zwaredb.mysql.dbaas.com.br', 'zwaredb', 'shamboga2099')) {
    echo 'Não foi possível conectar ao mysql';
    exit;
}

if (!mysql_select_db('zwaredb', $link)) {
    echo 'Não foi possível selecionar o banco de dados';
    exit;
}



$sql = 'SELECT NOME FROM USUARIO WHERE IDUSUARIO = 1';

$result = mysql_query($sql, $link);

while ($row = mysql_fetch_assoc($result)) {
    echo $row['NOME'];
}
mysql_free_result($result);

?>

