<?php

$pdo = new PDO('mysql:host=localhost;dbname=legado', 'root', '');

$sql = $pdo->prepare("SELECT * FROM `clientes`");

$sql->execute();

$usuarios = $sql->fetchAll();
foreach ($usuarios as $key => $value) {
    echo $value['nome'];
    echo '<hr>';
}
