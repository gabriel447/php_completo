<?php
//ESTUDANDO CRUD
//parametros pdo 'mysql:host;dbname,usuario,senha'
$pdo = new PDO('mysql:host=localhost;dbname=legado', 'root', '');

date_default_timezone_set('America/Sao_Paulo');

$nome = 'Joao';
$sobrenome = 'Kleber';
$registro = date('Y-m-d H:i:s');

$insert = $pdo->prepare("INSERT INTO `clientes` VALUES (null,?,?,?)");
// $insert->execute(array($nome, $sobrenome, $registro));
// echo 'Cliente inserido com Sucesso!';

//voce pode fazer um formulario e jogar um $_POST[''] em cada variavel e fazer um if(isset.. no submit para enviar;

$update = $pdo->prepare("UPDATE `clientes` SET nome='Fabricio',sobrenome='Rodrigues' WHERE id=3");

// if ($update->execute()) {
//     echo 'Cliente atualizado com sucesso!';
// }

$delete = $pdo->prepare("DELETE FROM `clientes` WHERE id=3");

// if ($delete->execute()) {
//     echo 'Cliente deletado com sucesso!';
// }

//LOCKTABLES PARA NÃO OCORRER REQUISIÇÕES SIMULTANEAS EM UM MOMENTO QUE NÃO PODE OCORRER
// $pdo->exec("LOCK TABLE `clientes` WRITE");
// sleep(10);

//LIKE %
$like = $pdo->prepare("SELECT * FROM `clientes` WHERE nome LIKE '%g%'");
// $like->execute();
//busca apenas 1 registro
// echo $busca = $like->fetch()['nome'];
//busca todos registros
// $todos = $like->fetchAll();
// print_r($todos);

//IN SERVE PARA BUSCAR ENTRE UM INDICE E OUTRO E BETWEEN SERVE PARA PEGAR REGISTROS ENTRE DATAS ESPECIFICAS
$in = $pdo->prepare("SELECT * FROM `clientes` WHERE id IN (1,2)");
$bw = $pdo->prepare("SELECT * FROM `clientes` WHERE registro BETWEEN '2020-09-23' AND '2020-09-24'");
// $in->execute();
// $bw->execute();
// $um = $in->fetchAll();
// $dois = $bw->fetchAll();
// print_r($um);
// print_r($dois);
