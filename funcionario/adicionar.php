<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include_once("../menu.php");
    ?>
    <h1>Cadastro de Funcionario</h1>
    <form action="inserir.php" method="post">
    <p>
        <label for="">Nome: </label>
        <input type="text" name="nome" required>
    </p>
    <p>
        <label for="">Email: </label>
        <input type="text" name="email" required>
    </p>
    <p>
        <label for="">Cargo: </label>
        <input type="text" name="cargo" required>
    </p>
    <p>
        <label for="">Salário: </label>
        <input type="number" name="salario" step="0.01" required>
    </p>
    <p>
        <label for="">Data Admissão: </label>
        <input type="date" name="admissao" required>
    </p>
    <p>
        <input type="submit" value="Cadastrar">
        <input type="reset" value="Limpar">
    </p>
    </form>
</body>
</html>