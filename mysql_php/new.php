<?php

$pdo = new PDO('mysql:host=localhost;dbname=new', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $sql = $pdo->prepare("SELECT * FROM clientes GROUP BY cargo");
// $sql = $pdo->prepare("SELECT * FROM clientes ORDER BY cargo DESC LIMIT 3");
$sql = $pdo->prepare("SELECT * FROM clientes GROUP BY cargo ORDER BY nome ASC LIMIT 1,3");
$sql->execute();
$clientes = $sql->fetchAll();

foreach ($clientes as $key => $value) {
    echo 'nome :' . $value['nome'];
    echo '<br />';
}
