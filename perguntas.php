<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
</head>
<body>
    <div>
        <?php include "menu.inc"; ?>
    </div>

    <div>
        <?php 
            require "perguntas.inc"; 
            carregaPergunta($_GET['id']); 
        ?>
    </div>

    <div>
        <?php include "rodape.inc"; ?>
    </div>

</body>
</html>