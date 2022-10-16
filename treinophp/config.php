<?php

function myAutoLoad($class)
{
    //str_replace: para substituir a barra quando subir na nuvem
    //params(search, replace, subject);
    $class = str_replace('\\', '/', $class);
    //verifica se o arquivo existe na pasta 'classes'
    if (file_exists('classes/' . $class . '.php')) {
        //depois inclui arquivo em classes
        include('classes/' . $class . '.php');
    }
}

//registra para o php chamar automaticamente a funcao
spl_autoload_register('myAutoLoad');
