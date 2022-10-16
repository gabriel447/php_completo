<!-- para somar valores voce precisa passar o name como array e depois manipular em um foreach -->
<!-- voce precisa jogar o valor[] dentro de uma variavel para manipular -->
<form method="post">
    <input type="number" name="valor[]">
    <input type="number" name="valor[]">
    <input type="number" name="valor[]">
    <input type="number" name="valor[]">
    <input type="submit" name="acao" value="enviar">
</form>

<?php

if (isset($_POST['acao'])) {
    $res = $_POST['valor'];
    foreach ($res as $key => $value) {
        echo $value;
    }
}

// fazer de exercicio:
// transformar a string em array com explode e depois fazer um loop para somar os valores

?>