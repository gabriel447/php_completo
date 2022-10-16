<?php

//uma classe abstrata serve apenas para ser herdada, não é possivel instanciar

abstract class Amigo
{
    public static function hojeNao()
    {
        echo 'hoje nao';
    }
}

class Best extends Amigo
{
    public static function hojeSim()
    {
        Amigo::hojeNao();
    }

    public function rock()
    {
        self::hojeSim();
    }
}

$best = new Best;
echo $best->rock();
