<?php
//também chamado de método magico
//Um construtor é responsável pela inicialização da classe no ato de instanciação. 
//Ou seja, quando o operador new for invocado juntamente com o nome da classe, 
//__construct é chamado implicitamente para fazer as operações que você definiu nele.

class Teste
{

    private $nome;
    private $idade;

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getIdade()
    {
        return $this->idade;
    }
}

$teste = new Teste('Gabriel', '28');
echo $teste->getNome();
echo $teste->getIdade();
