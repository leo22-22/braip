<!-- filepath: /c:/xampp/htdocs/BRAIP/CAMISAS/camisas.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conferência de Camisas</title>
    <link rel="stylesheet" href="camisas.css">
</head>
<body>
<header>
    <h1 id="header">AFILIADO DE SUCESSO</h1>
        <a href="../braip-main/index.html"><h5 id="header1">Voltar Início</h5></a>
    </header>
    <!-- Menu Hambúrguer -->
    <div class="hamburguer" onclick="toggleMenu()">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
    </div>

    <nav id="menu" class="menu-opcoes">
        <ul>
            <li><a href="../PRODUTOS/produtos.html">Produtos</a></li>
            <li><hr></li>
            <li><a href="http://localhost/BRAIP/CAMISAS/camisas.php">Camisas</a></li>
            <li><hr></li>
            <li><a href="../SERVICOS/servicos.html">Serviços</a></li>
            <li><hr></li>
            <li><a href="http://localhost/BRAIP/CADASTRO/cadastro.php">Bora Trabalhar Juntos!</a></li>
        </ul>
    </nav>

    <main>
        <h2>Conferência de Camisas</h2>
        <form action="processa_camisas.php" method="post" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Digite seu email" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" id="telefone" name="telefone" placeholder="(XX)XXXXX-XXXX" required>
            </div>
            <div class="form-group">
                <label for="camisas">Qual Camisa:</label>
                <input type="text" id="camisas" name="camisas" placeholder="Digite a Camisa que deseja" required>
            </div>
            <div class="form-group">
                <label for="quantidade">Quantidade:</label>
                <input type="text" id="quantidade" name="quantidade" placeholder="Digite Quantas Camisas Deseja" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Enviar">
            </div>
        </form>

        <h2>Registros de Camisas</h2>
        <table>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Camisas</th>
                <th>Quantidade</th>
                <th>Ação</th>
            </tr>
            <?php
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
        </table>
    </main>

    <script src="camisas.js"></script>
</body>
</html>