<?php
    class Classe{
        public static function MetodoEstatico(){
            print "Estou executando este método sem criar um objeto desta classe";
        }
    }
    classe::MetodoEstatico();
?>
