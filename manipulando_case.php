<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>Manipulando CASE da string em PHP</h1>
    <?php
        $variavelCasemisturado = "com a UNIASSELVI , posso estudar.";
        echo $variavelCasemisturado;
    ?>
    <h2>Invertendo para minúscula:</h2>
    <?php
        echo strtolower($variavelCasemisturado);
    ?>
    <h2>Invertendo para maiúscula:</h2>
    <?php
        echo strtoupper($variavelCasemisturado);
    ?>
    <h2>Invertendo a primeira letra para maiúscula</h2>
    <?php
        echo ucfirst($variavelCasemisturado);
    ?>
    <h2>Substituiçao de string em PHP</h2>
    <?php
        $variavelTextooriginal = "A diciplina de algoritmos é legal<br/>";
        
        $variavelTextoAlterado = str_replace("Algoritmos","programação web I",$variavelTextooriginal);
        echo $variavelTextoAlterado;
    ?>
    <h2>Obtendo tamanho da string</h2>
    <?php
        $nomeBonito = "PHP";
        $tamanho = strlen($nomeBonito);
        echo "O nome ".$nomeBonito." tem ".$tamanho." letras.";
    ?>
</body>
</html>