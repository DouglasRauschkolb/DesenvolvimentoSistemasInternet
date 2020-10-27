<!doctype html>
<html lang="pt-br">
    <head>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <title>Links</title>
        
    </head>
    <body>

        <section class="jumbotron text-center">
            <div class="container">
                <h1>Lista de Links</h1>
                <p>
                    <a href="links.php" class="btn btn-primary my-2">Links</a>
                    <a href="categorias.php" class="btn btn-secondary my-2">Categorias</a>
                </p>
                <p>
                    <a href="link.php" class="btn btn-secondary my-2">Inserir Link</a>
                </p>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row">

                    <?php foreach($links as $link){ ?>

                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img src=<?php echo $link->getImagem() ?> class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $link->getTitulo() ?></h5>
                                    <p class="card-text"><?php echo $link->getDescricao() ?></p>
                                    <?php foreach(explode( "-", $link->getPalavrasChaves()) as $palavra){ ?>
                                        <span class="badge badge-secondary"><?php echo $palavra ?></span>
                                    <?php } ?>
                                    <a href="excluirLink.php?id=<?php echo $link->getId() ?>" class="btn btn-primary">Remover</a>
                                    <a href=<?php echo $link->getLink() ?>  class="btn btn-primary">Visitar</a>
                                </div>
                            </div>
                        </div>

                    <?php } ?>

                </div>
            </div>
        </div>

    </body>
</html>
