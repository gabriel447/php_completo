<?php

// $json = '{"a":"gabriel","b":"gustavo"}';

//decodificamos o json
// $obj = json_decode($json);
// $arr = json_decode($json, true);

// echo $obj->a;
// echo $arr['a'];
// echo $arr['b'][0];

// $arr = ['nome' => 'guilherme', 'cidade' => 'floripa'];

// $json = json_encode($arr);
// echo $json;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
</head>

<body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $.ajax({
                url: 'request.php',
                dataType: 'json'
            }).done(function(data) {
                console.log(data.nome);
            })
        })
    </script>
</body>

</html>