<html>
    <head>
        <title>Categorias</title>
    </head>
    <body>
        <h1>Lista de Categorias</h1>
        <a href="categoria.php">Inserir</a>
        <table>
            <tr>
                <th>Nome</th>
            </tr>
            <?php foreach($categorias as $categoria){ ?>
                <tr>
                    <td><?php echo $categoria->getNome() ?></td>
                    <td>
                        <a href="categoria.php?id=<?php echo $categoria->getId() ?>">Editar</a>
                        <a href="excluirCategoria.php?id=<?php echo $categoria->getId() ?>">Excluir</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>