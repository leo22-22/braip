<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
<?php

    $conexao = mysqli_connect('localhost', 'root', '', 'teste_db');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf_cnpj = $_POST['cpf_cnpj'];

    $sql = "INSERT INTO cadastro (nome, email, cpf_cnpj) VALUES ('$nome', '$email', '$cpf_cnpj')";

    $retorno = mysqli_query($conexao, $sql);

    if ($conexao->query($sql) === TRUE) {
        echo "Cliente cadastrado com sucesso!";
    } else {
        if ($conexao->errno == 1062) {
            echo "Cliente já cadastrado!";
        } else {
            echo "Error: " . $sql . "<br>" . $conexao->error;
        }
    }
?>
</body>
</html>