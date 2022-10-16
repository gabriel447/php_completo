<?php

$pdo = new PDO('mysql:host=localhost;dbname=new', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $sql = $pdo->prepare("SELECT * FROM `clientes` LEFT JOIN `cargos` ON `clientes`.`cargo` = `cargos`.`id`");
$sql = $pdo->prepare("SELECT * FROM `clientes` RIGHT JOIN `cargos` ON `clientes`.`cargo` = `cargos`.`id`");
$sql->execute();
$clientes = $sql->fetchAll();

foreach ($clientes as $key => $value) {
    echo 'nome: ' . $value['nome'];
    echo ' / ';
    echo  $value['nome_cargo'];
    echo '<br />';
}
