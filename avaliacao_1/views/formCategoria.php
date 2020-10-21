<html>
    <head>
        <title>Categorias</title>
    </head>
    <body>
        <h1>Cadastro de Categoria</h1>
        <a href="categorias.php">Voltar</a>
        <form action="salvarCategoria.php" method="POST">
            <fieldset>
                <legend>Dados da Categoria</legend>
                <input type="hidden" name="id" value="<?php echo $categoria->getId(); ?>">
                <label for="nome">Categoria:</label>
                <input type="text" name="nome" id="nome" placeholder="Nome" value="<?php echo $categoria->getNome(); ?>">
                <br>
                <button type="submit">Salvar</button>
            </fieldset>
        </form>
    </body>
</html>