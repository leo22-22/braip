<!-- filepath: /c:/xampp/htdocs/BRAIP/CADASTRO/cadastro.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="cadastro.css">
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
        <h2>Cadastro</h2>
        <form action="processa_cadastro.php" method="post" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Digite seu email" required>
            </div>
            <div class="form-group">
                <label for="cpf_cnpj">CPF/CNPJ:</label>
                <input type="text" id="cpf_cnpj" name="cpf_cnpj" placeholder="Digite seu CPF ou CNPJ" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Cadastrar">
            </div>
        </form>

        <p id="error-message" style="color: red;"></p> 
    </main>

    <footer>
        <div id="contato">
            <h1>Contato</h1>
            <p>Telefone: <a class="links" href="https://wa.link/6pcon3">(18) 98111-3802</a></p>
            <p>Email: <a class="links" href="mailto:leonardoranuci17@gmail.com?subject=leonardoranuci17@gmail.com&body=leonardoranuci17@gmail.com">leonardoranuci17@gmail.com</a></p>
            <p>Instagram: <a class="links" href="https://instagram.com/seuusuario">@seuusuario</a></p>
        </div>
        
        <div id="politica">
            <h1>Política</h1>
            <p><a class="links" href="politica.html">Política de Privacidade</a></p>
        </div>
    
        <div id="empresa">
            <h1>Empresa</h1>
            <p>Sobre nós <br> Empresa de e-commerce apenas, com foco na venda de produtos <br> e na melhor satisfação possível do cliente.</p>
            <p>Endereço</p>
        </div>
    </footer>
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/671a49712480f5b4f5933514/1iavatp6n';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <script src="cadastro.js"></script>
</body>
</html>