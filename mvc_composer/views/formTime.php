<html>
    <head>
        <title>Times</title>
    </head>
    <body>
        <h1>Cadastro de Time</h1>
        <a href="times.php">Voltar</a>
        <form action="salvarTime.php" method="POST">
            <fieldset>
                <legend>Dados do time</legend>
                <input type="hidden" name="id" value="<?php echo $time->getId(); ?>">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" placeholder="Nome" value="<?php echo $time->getNome(); ?>">
                <br>
                <button type="submit">Salvar</button>
            </fieldset>
        </form>
    </body>
</html>