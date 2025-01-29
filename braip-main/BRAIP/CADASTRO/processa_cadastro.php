<?php    
$conexao = mysqli_connect('localhost','root','','db_cliente');

$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf_cnpj = $_POST['cpf_cnpj'];

$sql = "INSERT INTO dbl_cliente(nome,email,cpf_cnpj) VALUES ('$nome','$email','$cpf_cnpj')";

$retorno = mysqli_query($conexao,$sql);

include 'cadastro.php';
?>