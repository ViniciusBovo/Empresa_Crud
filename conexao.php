<?php 
    // este arquivo conecta com o mysql
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bd = "empresa";
    // Conectar o comando
    $result = mysqli_connect($servidor,$usuario,$senha,$bd);
    if($result){
        echo "Conectou com o banco de dados";
    }else{
        echo mysqli_error($result);
    }

?>