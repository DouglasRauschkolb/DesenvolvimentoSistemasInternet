<html>
    <head>
        <title>Links</title>
    </head>
    <body>
        <h1>Lista de Links</h1>
        <a href="link.php">Inserir</a>
        <table>
            <tr>
                <th>Titulo</th>
            </tr>
            <?php foreach($links as $link){ ?>
                <tr>
                    <td><?php echo $link->getTitulo() ?></td>
                    <td>
                        <a href="excluirLink.php?id=<?php echo $link->getId() ?>">Excluir</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>