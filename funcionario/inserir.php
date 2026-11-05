<?php  
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cargo = $_POST['cargo'];
    $salario = $_POST['salario'];
    $admissao = $_POST['admissao'];

// Criar o comando sql
$sql = "insert into Funcionario(nome,email,cargo,salario,data_admissao) 
values ('$nome','$email','$cargo', $salario,'$admissao')";
require_once("../conexao.php");
$resposta = mysqli_query($conexao, $sql);
if ($resposta == true)
{
    header("location:listar.php");
}
else{
    echo mysqli_connect_error($conexao);
}
?>