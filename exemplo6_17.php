<?php
    class Classe{
        function __construct(){
            print("Esse é o construtor");
        }


    }

    class SubClasse extends Classe{
        function __construct(){
            parent::__construct();
            print "Esse é o construtor da classe <br>";
        }
    }

    $obj = New Classe();
    $obj = New SubClasse();

?>