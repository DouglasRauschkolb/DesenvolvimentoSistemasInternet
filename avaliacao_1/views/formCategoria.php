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
                <h1>Cadastro de Categorias</h1>
                <p>
                    <a href="categorias.php" class="btn btn-secondary my-2">Voltar</a>
                </p>
            </div>
        </section>

        <div class="row justify-content-md-center">
            <form class="row justify-content-md-center" action="salvarCategoria.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $categoria->getId(); ?>">
                <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome" value="<?php echo $categoria->getNome(); ?>">
                <button class="btn btn-primary" type="submit">Salvar</butto>
            </form>
        </div>
        
    </body>
</html>