<?php

//cria a pasta
// mkdir('pasta');

//verifica se há pasta ou não
// if (is_dir('pasta')) {
//     echo 'é uma pasta válida';
// } else {
//     echo 'não existe ou não é uma pasta';
// }

//apaga a pasta
// rmdir('pasta');

if ($handle = opendir('pasta')) {

    while ($file = readdir($handle)) {
        if ($file == '.' || $file == '..') {
            continue;
        }
        // if (is_dir('pasta/' . $file) == false) {
        //     echo 'é um diretorio';
        // } else {
        //     echo 'não é um diretório';
        // }
        echo "$file\n";
        echo '<br />';
    }

    closedir($handle);
}
