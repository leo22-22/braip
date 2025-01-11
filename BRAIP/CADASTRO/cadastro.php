<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO CLIENTE</title>
</head>
<body>
<?php    
$conexao = mysqli_connect('localhost','root','','db_cliente');

$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf_cnpj = $_POST['cpf_cnpj'];

$sql = "INSERT INTO dbl_cliente(nome,email,cpf_cnpj) VALUES ('$nome','$email','$cpf_cnpj')";

$retorno = mysqli_query($conexao,$sql);
?>
</body>
</html>