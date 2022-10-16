<?php

class Pessoa
{
    public $nome = 'Gabriel';
    // public $apelido;
    private $idade = 28;
    public static $peso = 80;

    public function comendo()
    {
        echo 'está comendo';
        echo '<br />';
        $this->crescendo();
        $this->envelhecendo();
    }

    private function crescendo()
    {
        echo 'e crescendo';
    }

    private function envelhecendo()
    {
        echo ' com a idade de ';
        echo $this->idade;
        echo ' anos';
    }

    public static function setApelido($apelido)
    {
        // $this->apelido = $apelido;
    }

    public function getApelido()
    {
        return $this->apelido;
    }
}

$pessoa = new Pessoa;
$pessoa->nome = 'Gabe';
echo $pessoa->nome;
echo '<br/>';
$pessoa->comendo();
Pessoa::$peso = 100;
echo ' com seu peso atual de ';
echo Pessoa::$peso;
echo 'kg';
echo ', o apelido é ';
$pessoa->apelido = 'bb';
echo $pessoa->getApelido();
