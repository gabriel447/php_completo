<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>treino</title>
</head>

<body>
    <p><?php

        //BASICO

        //VARIAVEL
        // $nome = 'Gabriel';
        // echo $nome;

        //CONSTANTE
        // define('NOME','Gabriel');
        // echo NOME;

        //LAÇOS DE REPETIÇÃO

        // for($i = 0;$i < 10;$i ++){
        //     echo $i;
        // }

        // $i = 0;
        // while($i < 10){
        //     echo $i;
        //     $i++;
        // }

        // $i = 0;
        // do{
        //     echo 'Olá Mundo';
        //     $i++;
        // }while($i < 10);

        //INTERMEDIARIO

        //FOREACH
        // $arr = array('A','B','C','D','E','F','G');
        // foreach($arr as $key => $value) {
        //     echo $key;
        //     echo'=>';
        //     echo $value;
        //     echo '<br />';
        // }

        // funcao count do php
        // $total = count($arr);
        // for($i = 0; $i < $total; $i++){
        //     echo $arr[$i];
        // }

        //array multidimensional
        // $arr = array(array('Gabriel','Anjos'),array(28,94));
        // echo $arr[1][1];

        //SLEEP
        // sleep(3);
        // echo 'Depois de 3 segundos';

        //DIE
        // $nome = 'Gabriel';
        // if($nome == 'Gustavo'){
        //     echo 'ok';
        // }else{
        //     die('o codigo para por aqui!');
        // }

        //FUNCTION
        // function calculadora($n1,$n2){
        //     echo ($n1+$n2);
        // }

        // calculadora(11,22);

        //DATA
        // date_default_timezone_set('America/Sao_Paulo');
        // $data = date('d/m/Y H:i:s',time()+(60*10));

        // echo $data;

        //INCLUDE
        // include('header.php');

        //RECORTE DE STRINGS
        // $conteudo = 'asjfnajnfaosnfoiansfoiansf';
        // echo substr($conteudo,0,10);

        //TRANSFORMAR STRING EM ARRAY 
        // $nome = 'Gabriel dos Anjos';
        // $nomes = explode(' ',$nome);
        // print_r($nomes);
        // JUNTAR ARRAY
        // $nomes = implode(' ',$nomes);
        // echo $nomes;

        //RETIRAR TAGS
        // $conteudo = '<h1>Gabriel</h1> fora da tag';
        // echo strip_tags($conteudo);

        //switch/case  
        //break - usa no switch

        // $nome = 'Gabriel';
        // switch($nome){
        //     case 'Gabriel':
        //         echo 'acertou mizeravi';
        //         break;
        //     case 'Joao':
        //         echo 'erro mizeravi';
        //         break;
        // }

        //continue - usa em loop
        // for($i = 0; $i < 10; $i++){
        //     if($i == 5 || $i === 9){
        //         continue;
        //     }
        //     echo $i;
        //         echo '<hr />';
        // }

        //ARRAY MERGE
        // $arr1 = array('chave1' => 'valor1', 'chave2' => 'valor2');
        // $arr2 = array('chave3' => 'valor3', 'chave4' => 'valor4');
        // $result = array_merge($arr1,$arr2);
        // print_r($result);

        //APLICAR FUNCAO EM TODOS OS VALORES DO ARRAY
        // $arr = ['<h1>Gabe</h1>','<h2>Pablo</h2>','<h3>sla</h3>'];
        // print_r(array_map('strip_tags',$arr));


        //SESSION - a variavel fica armazenada ate fechar

        // session_start();
        // $_SESSION['nome'] = 'Gabriel';
        // $_SESSION['idade'] = 28;

        //COOKIES - mesmo depois que fecha o navegador fica guardado e é definido um tempo de expiração

        ?></p>
</body>

<!-- <script>
    alert('Olá mundo!');
</script> -->

</html>