<?php

//MODO RAIZ
$pdo = new PDO('mysql:host=localhost;dbname=legado', 'root', '');
// $query = $pdo->prepare("SELECT * FROM categorias");
// $query->execute();
// $result = $query->fetchAll();

// foreach ($result as $key => $value) {
//     $categoria_id = $value['id'];
//     echo 'exibindo os posts de ' . $value['nome'];
//     echo '<br />';
//     $query = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = $categoria_id");
//     $query->execute();
//     $info = $query->fetchAll();
//     foreach ($info as $key => $value) {
//         echo 'Titulo: ' . $value['titulo'];
//         echo '<br />';
//         echo 'Noticia: ' . $value['conteudo'];
//         echo '<hr>';
//     }
// }

//MODO NUTELLA (puchar dado de duas tabelas)
$sql = $pdo->prepare("SELECT * FROM `posts` INNER JOIN `categorias` ON `posts`.`categoria_id` = `categorias`.`id`");
//quando a categoria_id da tabela posts seja igual o id de categorias

$sql->execute();

//FETCH ASSOC = RECUPERAR APENAS AS COLUNAS
$info = $sql->fetchAll(PDO::FETCH_ASSOC);

//para debugar organizadamente
echo '<pre>';
print_r($info);
echo '<pre />';

// foreach ($info as $key => $value) {
//     echo 'Titulo: ' . $value['titulo'];
//     echo '<br />';
//     echo 'Noticia: ' . $value['conteudo'];
//     echo '<hr>';
// }
