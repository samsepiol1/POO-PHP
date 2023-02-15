<?php

class Classe1{
    private $var1 = "Olá, var1! \n";
    protected $var2 = "Olá, var2!, \n";

    protected $var3 = "Olá, var3!, \n";

    function bomdia(){

        print "Classe 1";
        print "Classe 2";
        print "Classe 3";
    }

}

class Classe2 extends Classe1{
   function bomDia(){
    Classe1::bomdia();
    print "Faça Alguma coisa";
   }
}

?>