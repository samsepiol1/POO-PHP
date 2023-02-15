<?php
class Classe1{
    private function MetodoPrivado(){
        echo "Classe::MetodoPrivado() chamado <br>";
    }

    protected function MetodoProtegido(){
        $this ->MetodoPrivado();
    }


}
class Classe2 extends Classe1{
    public function MetodoPublico(){
        $this -> MetodoProtegido();
    }
   
?>