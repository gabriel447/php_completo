<?php 
    session_start();
    // echo  $_SESSION['nome'];
    // echo $_SESSION['idade'];
    // session_destroy();

    //params: nomedocookie, valor, tempodeexpiração(24hrs), path(apenas essa pagina)
    //setcookie('nome','Gabriel',time() + (60*60*24), '/');

    // echo $_COOKIE['nome'];

    //para apagar o cookie colocar tempo negativo
    setcookie('nome','Gabriel',time() - (60*60*24), '/');
