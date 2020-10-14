<html>
    <head>
        <title>Jogadores</title>
    </head>
    <body>
        <h1>Cadastro de Jogador</h1>
        <a href="jogadores.php">Voltar</a>
        <form action="salvarJogador.php" method="POST">
            <fieldset>
                <legend>Dados do jogador</legend>
                <input type="hidden" name="id" value="<?php echo $jogador->getId(); ?>">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" placeholder="Nome" value="<?php echo $jogador->getNome(); ?>">
                <br>
                <label for="posicao">Posição:</label>
                <input type="text" name="posicao" id="posicao" placeholder="Posição" value="<?php echo $jogador->getPosicao(); ?>">
                <br>
                <label for="overall">Overall:</label>
                <input type="number" name="overall" id="overall" placeholder="Overall" value="<?php echo $jogador->getOverall(); ?>">
                <br>
                <label for="time">Time:</label>
                <select name="time">
                    <?php
                        foreach ($times as $time){ ?>
                            <option value= <?= $time->getId() ?> 
                                    <?=($time->getId() == $jogador->getIdTime())?'selected':''?>
                             > <?= $time->getNome() ?></option>
                        <?php } ?>
                </select>
                <br>
                <button type="submit">Salvar</button>
            </fieldset>
        </form>
    </body>
</html>