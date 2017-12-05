<?php

$pessoas = array();

array_push($pessoas, array('nome' => 'João', 'Idade' =>20));
array_push($pessoas, array('nome' => 'Glaucio', 'Idade' =>25));

echo json_encode($pessoas);

?>
