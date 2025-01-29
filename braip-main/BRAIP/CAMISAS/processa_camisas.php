<?php
$conexao = mysqli_connect('localhost', 'root', '', 'db_cliente');

if (!$conexao) {
    die("Connection failed: " . mysqli_connect_error());
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$camisas = $_POST['camisas'];
$quantidade = $_POST['quantidade'];

$sql = "INSERT INTO dbl_camisas (nome, email, telefone, camisas, quantidade) VALUES ('$nome', '$email', '$telefone', '$camisas', '$quantidade')";

if (mysqli_query($conexao, $sql)) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . mysqli_error($conexao);
}

mysqli_close($conexao);
header("Location: camisas.php");
exit();
?>