<?php
    class Classe{
        static $variavel_estatica = 10;
        function soma($numero){
            Classe::$variavel_estatica +=$numero;
        }
    }
?>