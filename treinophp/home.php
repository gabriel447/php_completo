<?php

session_start();
// echo $_SESSION['nome'];
// echo $_SESSION['idade'];

// setcookie('senha',123456789,time() + (60), '/');
// setcookie('senha',123456789,time() - (60), '/');

// echo $_COOKIE['senha'];

if (isset($_GET['action'])) {
    print_r($_GET['v1'] + $_GET['v2']);
}

?>

<form method="get">
    <input type="text" name="v1">
    <input type="text" name="v2">
    <input type="submit" name="action" value="action">
</form>

<!-- a unica diferença entre GET e POST é que um os parametros ficam na url e outro não -->