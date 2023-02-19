<?php

if(isset($_COOKIE["nome_usuario"])){
    $nome_usuario = $_COOKIE["nome_usuario"];
}

if(isset($_COOKIE["senha_usuario"])){
    $senha = $_COOKIE["senha_usuario"];

}

if(!(empty($nome_usuario) OR empty($senha_usuario))){
    include 'conecta_mysql.inc';
    $resultado = mysql_query("SELECT * FROM usuarios where username='$nome_usuario'");
}

//Adicionar mais lógica sobre a autenticação e validação de cookies



?>