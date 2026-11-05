<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
        <label for="">Data Admissãoo: </label>
        <input type="date" name="admissao" required>
    </p>
    <p>
        <input type="submit" value="Cadastrar">
        <input type="reset" value="Limpar">
    </p>
    </form>
</body>
</html>