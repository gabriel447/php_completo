<?php
//definir os dados sensiveis como constante para segurança
define('HOST', 'localhost');
define('DB', 'legado');
define('USER', 'root');
define('PASS', '');

try {
    $pdo = new PDO(
        'mysql:host=' . HOST . ';dbname=' . DB,
        USER,
        PASS,
        //serve para transformar os caracteres em utf8 e nao ter problemas com acentação
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );
    //tratamento de erro para nao aparecer a senha quando usuario tentar conectar quando cair o servidor
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo '<h1>Erro ao conectar</h1>';
}
