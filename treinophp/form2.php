<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>

<body>
    <?php

    if (isset($_POST['acao'])) {
        $arr = $_POST['valor'];
        foreach ($arr as $key => $value) {
            echo $value;
            echo '<br />';
        }
    }

    ?>
    <form method="post">
        <select>
            <option value="gabe">gabe</option>
            <option value="joao">joao</option>
        </select>
        <input type="checkbox" name="valor[]" value="10">10
        <input type="checkbox" name="valor[]" value="20">20
        <input type="checkbox" name="valor[]" value="30">30
        <input type="checkbox" name="valor[]" value="40">40
        <input type="checkbox" name="valor[]" value="50">50
        <input type="submit" name="acao" value="enviar">
    </form>
</body>

</html>