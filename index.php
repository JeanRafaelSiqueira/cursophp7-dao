<?php 

require_once("config.php");

//$sql = new sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode(($usuarios));

$root = new Usuario();

$root->loadbyId(2); 

echo $root;

 ?>