<!doctype html>
<html lang="pt-br">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v4.1.1">

        <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">

        <!-- Bootstrap core CSS -->
        <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

        <title>Lista de Links</title>

        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>

        <!-- Custom styles for this template -->
        <link href="album.css" rel="stylesheet">
    </head>
    <body>

        <main role="main">

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
                                        <a href="excluirLink.php?id=<?php echo $link->getId() ?>" class="btn btn-primary">Remover</a>
                                        <a href=<?php echo $link->getLink() ?>  class="btn btn-primary">Visitar</a>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>

                    </div>
                </div>
            </div>

        </main>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

</html>
