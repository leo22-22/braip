<?php
$conexao = mysqli_connect('localhost', 'root', '', 'db_cliente');

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM dbl_camisas WHERE id = $id";

    if (mysqli_query($conexao, $sql)) {
        echo "Registro deletado com sucesso!";
    } else {
        echo "Erro ao deletar registro: " . mysqli_error($conexao);
    }

    mysqli_close($conexao);
    header("Location: camisas.php");
    exit();
}

$conexao = mysqli_connect('localhost', 'root', '', 'db_cliente');
$sql = "SELECT * FROM dbl_camisas";
$result = mysqli_query($conexao, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['nome'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['telefone'] . "</td>";
    echo "<td>" . $row['camisas'] . "</td>";
    echo "<td>" . $row['quantidade'] . "</td>";
    echo "<td><form action='excluir_camisas.php' method='post'><input type='hidden' name='id' value='" . $row['id'] . "'><input type='submit' value='Excluir'></form></td>";
    echo "</tr>";
}

mysqli_close($conexao);
?>