<?php 

//colocar a classe como final faz com que ela não possa ser herdada, mas pode instanciar
//se eu colocar final class Pai{ .. veja que dá erro, pois ela não pode ser herdada pela filha

class Pai{
    protected function digaOla(){
        echo 'Olá Filha amada';
    }
}

final class Filha extends Pai{
    public function reproduzirPai(){
        // return digaOla();
        $this->digaOla();
    }

    //aqui estou chamando primeiro o valor original da funcao pai
    //e depois sobreescrevendo a funcao
    public function digaOla(){
        parent::digaOla();
        echo '<br />';
        echo 'sobreescrevendo';
    }
}

$filha = new Filha;
$filha->reproduzirPai();

//a protected so pode ser chamada pela classe filha
$pai = new Pai;
// $pai->digaOla();
