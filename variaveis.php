<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php 
            //string
            $nome = 'Bruno Kioshi Sakaguchi';

            //int
            $idade = 23;

            //float
            $peso = 68.5;

            //boolean
            $fumante_sn = false; //(true = 1) ou (false = vazio)
        ?>

        <h1>Ficha Cadastral</h1>
        <p>Nome: <?= $nome?> </p>
        <p>Idade: <?= $idade?> </p>
        <p>Peso: <?= $peso?>kg</p>
        <p>Fumante: <?= $fumante_sn?> </p>
    </body>
</html>