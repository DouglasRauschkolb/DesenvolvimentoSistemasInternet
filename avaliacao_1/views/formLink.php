<html>
    <head>
        <title>Links</title>
    </head>
    <body>
        <h1>Cadastro de Link</h1>
        <a href="links.php">Voltar</a>
        <form action="salvarLink.php" method="POST">
            <fieldset>
                <legend>Dados do Link</legend>
                <input type="hidden" name="id" value="<?php echo $link->getId(); ?>">
                <label for="nome">Link:</label>
                <button type="submit">Salvar</button>
            </fieldset>
        </form>
    </body>
</html>