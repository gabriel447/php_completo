<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>praticar</title>
</head>

<body>
    <?php

    //var
    // $nome = 'Gabriel';
    // echo 'Meu nome é ' .$nome;

    //const
    // define('PAIS','BRASIL');
    // echo PAIS;

    //for, foreach, while, do/while, switch/case, break/continue;
    // for($i = 0; $i < 10; $i++){
    //     echo $i;
    // }

    // $arr = ['A','B','C','D','E','F','G'];
    // foreach($arr as $key => $value){
    //     echo $key;
    //     echo '<br />';
    //     echo $value;
    // }

    // $i = 0;
    // while($i < 10){
    //     echo $i;
    //     $i+=1;
    // }

    // $i = 0;
    // do{
    //     echo $i;
    //     $i+=1;
    // }while($i < 10);

    // $nome = 'Marcos';
    // switch($nome){
    //     case 'Gabriel':
    //         echo 'passou';
    //         break;
    //     case 'Marcos':
    //         echo 'Não passou :(';
    //         break;
    // }

    // $arr = ['A','B','C','D','E','F','G'];
    // foreach($arr as $key => $value){
    //     if($value == 'C'){
    //         continue;
    //     }
    //     echo $value;
    // }

    //array multidimensional
    // $md = array(array('A','B','C','D'),array('E','F','G','H'));
    // echo $md[0][3].$md[1][2];

    //count em array
    // $arr = ['A','B','C'];
    // $total = count($arr);
    // echo $total;
    // for($i = 0; $i < $total; $i++){
    //     echo $arr[$i];
    // }

    //função calculadora com sleep
    // 
    // function calculadora($p1,$p2){
    //     echo($p1+$p2);
    // }
    // calculadora(11,11);

    //datas
    // date_default_timezone_set('America/Sao_Paulo');
    // $data = date('d/m/y h:i:s',time()+(60));
    // echo $data;

    //die and sleep junto de include
    // sleep(3);
    // $bol = true;
    // if($bol = true){
    //     include('incluir.php');
    //     die();
    //     echo 'o algoritmo não morreu';
    // }

    //retirar tags
    // $texto = '<h1>OI GABRIEL! </h1>SEJA BEM VINDO';
    // $retirar = strip_tags($texto);
    // echo $retirar;

    //recortar string
    // $conteudo = 'qwertyuiop';
    // $cut = substr($conteudo,0,5);
    // echo $cut;

    //(explode) separa string em array (implode) junta array para formar string
    // $nome = 'Gabriel dos Anjos';
    // $nomes = explode(' ',$nome);
    // $nomes = implode(' ',$nomes);
    // print_r($nomes);

    //juntar strings em array
    // $arr1 = ['A','B','C','D'];
    // $arr2 = ['E','F','G','H'];
    // $res = array_merge($arr1,$arr2);
    // print_r($res);

    //aplicar funcao em todos os valores do array
    // $arr = ['<h1>OI</h1>','<H2>COMO VAI</H2>','<H3>VOCE?</H3>'];
    // print_r(array_map('strip_tags',$arr));

    //atribuir o valor a sessao para ser executada em outro arquivo e destruida
    session_start();
    session_destroy();
    // $_SESSION['nome'] = 'Gabriel dos Anjos';
    // $_SESSION['idade'] = 28;

    ?>
</body>

</html>