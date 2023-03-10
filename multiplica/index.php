<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto multiplica</title>
</head>
<body>
    <h1>Multiplicando em PHP</h1>
    <?php
        //Referencia constantes e funções contidas em arquivos externos
        require("constantes.php");
        include("funcoes.php");

        //Executa um função de um aqrquivo externo
        echo "O resultado da multiplicação dos valores é " .multiplica(dois,quatro);
    ?>
</body>
</html>