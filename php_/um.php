<?php

if (file_exists('file.txt')) {
    $content = file_get_contents('file.txt');
    echo nl2br($content);
} else {
    $content = "conteudo do arquivo";
    file_put_contents('file.txt', $content);
    echo 'arquivo criado com sucesso';
}
