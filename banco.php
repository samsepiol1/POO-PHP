<?php

class ContaBanco{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    //Metodos

    public function abrirConta($t){
        $this -> setTipo($t);
        $this -> setStatus(true);

        if($t == "CC"){
            $this ->setSaldo(50);
        } elseif ($t == "CP"){
            $this ->setSaldo(150);
        }

    }

    public function fecharConta(){
        if($this -> saldo > 0){
            echo "Conta ainda possui dinheiro"
        } elseif($this -> getSaldo() < 0){
            echo "Conta ainda está em debito"
        } else{
            $this -> status = false;
        }

    }

    public function depositar($v){
        if($this -> status == true){
            $this -> saldo = $this -> + $v
        }else{
            echo "Não Consigo Depositar"
        }

    }

    public function sacar($v){
        if($this -> getStatus()){
            if($this -> getStatus() > $v){
                $this -> setSaldo($this -> getSaldo() - $v);
            }else{
                echo "<p> Saldo Insuficiente para saque</p>"
            }
            else{
                echo "não posso sacar de uma conta fechada";
            }
        }
    }

   

    //Métodos Especiais

    public function __construct(){
        $this -> setSaldo(0);
        $this -> setStatus(false)

    }

    public function getNumConta(){
        return $this -> numConta
    }

    public function setNumConta($n){
        $this -> numConta = $n;
    }
}

?>
