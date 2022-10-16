<form method="post">
    <input type="text" name="adress">
    <input type="submit" name="acao">
</form>

<?php

if (isset($_POST['acao'])) {
    $url = urlencode($_POST['adress']);
    $str = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address=' . $url . '&sensor=false
    ');

    $endereco = json_decode($str);

    echo '<pre>';
    print_r($endereco);
    echo '</pre>';
}

?>