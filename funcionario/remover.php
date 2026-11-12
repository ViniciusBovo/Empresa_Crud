<?php
// obter o id 
$id = $_GET['id'];




//  criar o delete sql
$sql = "delete from funcionario WHERE id = $id";


// Executar
include_once("../conexao.php");
$result=mysqli_query($conexao,$sql);
if($result)
{
    header("location:listar.php");
}
else{
    $mysqli_connect_error($conexao);
}


// redirecionar para o listar



?>