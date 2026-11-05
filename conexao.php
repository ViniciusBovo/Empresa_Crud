<?php 
    // este arquivo conecta com o mysql
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bd = "empresa";
    // Conectar o comando
    $conexao = mysqli_connect($servidor,$usuario,$senha,$bd);
    if($conexao){
        echo "Conectou com o banco de dados";
    }else{
        echo mysqli_connect_error($conexao);
    }
?>