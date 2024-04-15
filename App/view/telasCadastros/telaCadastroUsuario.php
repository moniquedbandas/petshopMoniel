<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Public/css/estilosLogin.css">
    <link rel="icon" href="../../Public/imagens/patinha.png" type="image/png" sizes="16x16">
    <link rel="icon" href="../../Public/imagens/patinha.png" type="image/png" sizes="32x32">
    <link href="https://fonts.googleapis.com/css2?family=Nunito" rel="stylesheet">
    <title>PETSHOP MONIEL</title>
</head>

<body>
    <header class="areaHeader">
        <div class="areaTitulo">
            <h2 class="titulo">Petshop Moniel</h2>
        </div>
        <div class="areaLogos">
            <div class="areaLogo">
                <a href="../../../index.html" title="Petshop Moniel">
                    <img src="../../../Public/imagens/iconePet.png" alt="Petshop Moniel" class="patinha">
                </a>
            </div>
        </div>
        <nav class="menuHeader">
            <ul>
                <li><strong>Área de cadastro usuário</strong></li>
            </ul>
        </nav>

    </header>

    <main>

        <div class="telaCadastro">
            <h3 class="boas-vindas">Welcome</h3>
            <form action="../../controller/Processamento/ProcessarUsuario.php" method="post">
                <label for="nome">Nome: </label>
                <br>
                <input type="text" id="nome" name="email" autocomplete="off"><br><br>
                <label for="tel">Telefone: </label>
                <br>
                <input type="text" id="tel" name="tel" autocomplete="off"><br><br>
                <label for="endereco">Endereço: </label>
                <br>
                <input type="text" id="endereco" name="endereco" autocomplete="off"><br><br>
                <label for="cpf">CPF: </label>
                <br>
                <input type="text" id="cpf" name="cpf" autocomplete="off"><br><br>
                <label for="email">E-mail: </label>
                <br>
                <input type="text" id="email" name="email" autocomplete="off"><br><br>
                <label for="password">Senha: </label>
                <br>
                <input type="password" id="password" name="password" autocomplete="off">
                <br>
                <input type="hidden" id="op" name="op">
                <div class="areaBotoes">
                    <input type="hidden" name="op" value="criarUsuario">
                    <input type="submit" name="create" value="Criar">
                </div>
            </form>
        </div>

    </main>

</body>

</html>