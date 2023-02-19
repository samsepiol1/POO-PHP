<?php


//Obtém os valores digitados
$username = $_POST["username"];
$senha = $_POST["senha"];

//Acesso ao banco de dados

include 'connect_php.mysql.inc';

$resultado = mysql_query("SELECT * FROM usuarios where username=$username");

$linhas = mysql_num_rows ($resultado);

//Teste se a consulta encontrou algum registro

if($linhas == 0){
    echo "Consulta não retornou consultas";
}

else{
    if($senha != mysql_result($resultado, 0, "senha")){
        echo "senha está correta";
    } // confera a senha

else{
    setcookie("nome_usuario", $username);
    setcookie("senha_usuario", $senha);
}
}

mysql_close($conexao):


?>