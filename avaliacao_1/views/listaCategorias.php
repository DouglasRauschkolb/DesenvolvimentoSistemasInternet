<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <title>Categorias</title>
    </head>
    <body>

        <section class="jumbotron text-center">
            <div class="container">
                <h1>Lista de Categorias</h1>
                <p>
                    <a href="links.php" class="btn btn-primary my-2">Links</a>
                    <a href="categorias.php" class="btn btn-secondary my-2">Categorias</a>
                </p>
                <p>
                    <a href="categoria.php" class="btn btn-secondary my-2">Inserir Categoria</a>
                </p>
            </div>
        </section>

        <div class="container">
            <div class="row justify-content-md-center">

                <ul class="list-group list-group-horizontal flex-d">
                    <?php foreach($categorias as $categoria){ ?>
                        <li class="list-group-item">
                            <div>
                                <p class="text-center" ><?php echo $categoria->getNome() ?></p>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a class="btn btn-secondary my-2" href="categoria.php?id=<?php echo $categoria->getId() ?>">Editar</a>
                                    <a class="btn btn-secondary my-2" href="excluirCategoria.php?id=<?php echo $categoria->getId() ?>">Excluir</a>
                                </div>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
                
            </div>
        </div>
        
    </body>
</html>