<?php

class Caneta{
    public $modelo;
    public $cor;
    private $ponta;
    protected $conta;
    protected $tampada;

    public function rabiscar(){
        if($this -> tampada == true){
            echo "<p>Erro, Não posso rabiscar</p>";
        }
        else{
            echo "Estou rabiscando";
        }
    }
    
    private function tampar(){
        $this -> tampada = true;
    }

    private function destampar(){
        $this -> tampada = false;
    }
}

?>