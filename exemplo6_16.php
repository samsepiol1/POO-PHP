<?php
    abstract class ClasseAbstrata{
        abstract public function teste();
    }

    class ClasseImplementacao extends ClasseAbstrata{
        public function teste(){

            echo "Metodo Teste";
        }

        

    }
?>