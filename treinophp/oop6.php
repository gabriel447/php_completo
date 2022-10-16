<?php

//namespace/use - serve para dividir as classes como se fossem dentro de diretorios, só que virtuai

include('classe1.php');
include('classe2.php');

use \Sessao1\Classe1 as exemplo;

$classe1 = new exemplo;
