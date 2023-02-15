<?php

class Calculo{
    private $resultado;

    function __construct(){

        //Gera Formulário
        print("Aqui vai o formulário feito em HTML");
    }

    function Adicao($n1, $n2){
        $this ->resultado = $n1 + $n2;

        print "Resultado da adição: $n1 + $n2 = ".$this->resultado;


    }

    function Subtracao($n1, $n2){
        $this ->resultado = $n1 - $n2;

        print "Resultado da adição: $n1 + $n2 = ".$this->resultado;

        
    }
}
?>