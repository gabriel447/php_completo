<?php

//PARTE 1

//$pdo = new PDO('mysql:host=localhost;dbname=legado', 'root', '');

// $query = $pdo->prepare('SELECT * FROM posts');

// $query->execute();

// $result = $query->fetchAll();

// foreach ($result as $key => $value) {
//     echo 'Titulo: ' . $value['titulo'];
//     echo '<br />';
//     echo 'Noticia: ' . $value['conteudo'];
//     echo '<hr>';
// }

// for ($i = 0; $i < count($result); $i++) {
//     echo 'Titulo: ' . $result[$i]['titulo'];
//     echo '<br />';
//     echo 'Noticia: ' . $result[$i]['conteudo'];
//     echo '<hr>';
// }

//PARTE 2

$pdo = new PDO('mysql:host=localhost;dbname=legado', 'root', '');
$query = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = ?");

//aqui jogamos a condicao da query no execute para poder passar o parametro na url
$query->execute(array($_GET['categoria_id']));

$result = $query->fetchAll();

foreach ($result as $key => $value) {
    echo 'Titulo: ' . $value['titulo'];
    echo '<br />';
    echo 'Noticia: ' . $value['conteudo'];
    echo '<hr>';
}
