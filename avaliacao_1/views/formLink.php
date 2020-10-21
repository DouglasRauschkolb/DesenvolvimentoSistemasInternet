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
                <label for="link">Link:</label>
                <input type="text" name="link" id="link" placeholder="Link" value="<?php echo $link->getLink(); ?>">
                <br>
                <label for="categoria">Categoria:</label>
                <select name="categoria">
                    <?php
                        foreach ($categorias as $categoria){ ?>
                            <option value= <?= $categoria->getId() ?> 
                                    <?=($categoria->getId() == $link->getIdCategoria())?'selected':''?>
                             > <?= $categoria->getNome() ?></option>
                        <?php } ?>
                </select>
                <br>
                <button type="submit">Salvar</button>
            </fieldset>
        </form>
    </body>
</html>