<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            $nome = 'Bruno';
            $idade = 23;

            //operador .
            echo 'Olá '. $nome .', vi que você tem '. $idade .' anos!';

            //aspas duplas
            echo '<br>';

            echo "Olá $nome, vi que você tem $idade anos!"
        ?>
    </body>
</html>