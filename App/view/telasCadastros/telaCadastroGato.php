<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <header>
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
            <h3>Área de cadastro</h3>
        </nav>

    </header>

    <main>

        <div class="telaCadastro">
            <h3 class="boas-vindas">Área de cadastro de gato</h3>
            <form action="../../controller/Processamento/ProcessarGato.php" method="post">
                <label for="id">ID do Tutor: </label>
                <br>
                <input type="text" id="id" name="id" autocomplete="off" required><br><br>
                <label for="nome">Nome do pet: </label>
                <br>
                <input type="text" id="nome" name="nome" autocomplete="off"><br><br>
                <label for="idade">Idade: </label>
                <br>
                <input type="number" id="idade" name="idade" autocomplete="off"><br><br>
                <label for="peso">Peso: </label>
                <br>
                <input type="number" id="peso" name="peso" autocomplete="off"><br><br>
                <label for="sexo">Sexo: </label>
                <br>
                <input type="text" id="sexo" name="sexo" autocomplete="off"><br><br>
                <label for="raca">Raça: </label>
                <br>
                <input type="text" id="raca" name="raca" autocomplete="off"><br><br>
                <label for="castrado">Castrado: </label>
                <br>
                <input type="text" id="castrado" name="castrado" autocomplete="off"><br><br>
                <label for="temperamento">Temperamento: </label>
                <br>
                <input type="text" id="temperamento" name="temperamento" autocomplete="off"><br><br>
                <input type="hidden" id="og" name="og">
                <div class="areaBotoes">
                    <input type="hidden" name="og" value="criarGato">
                    <input type="submit" name="create" value="Cadastrar">

                    <input type="hidden" name="og" value="listarGato">
                    <input type="submit" name="listar" value="Listar">
                </div>
            </form>
        </div>

    </main>

</body>

</html>