<html>
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
                <h1>Cadastro de Links</h1>
                <p>
                    <a href="links.php" class="btn btn-secondary my-2">Voltar</a>
                </p>
            </div>
        </section>

        <div class="row justify-content-md-center">
            <form class="form-row" action="salvarLink.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $link->getId(); ?>">    
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input class="form-control" type="text" name="link" id="link" placeholder="Link" value="<?php echo $link->getLink(); ?>">
                    </div>
                    <div class="form-group col-md-5">
                        <select class="form-control" name="categoria">
                            <?php
                                foreach ($categorias as $categoria){ ?>
                                    <option value= <?= $categoria->getId() ?> 
                                        <?=($categoria->getId() == $link->getIdCategoria())?'selected':''?>
                                    > <?= $categoria->getNome() ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <button class="btn btn-primary mb-3" type="submit">Salvar</button>
            </form>
        </div>
    </body>
</html>