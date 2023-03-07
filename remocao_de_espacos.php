<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>Estudando as funçoes trim()</h1>
    <h2>Removendo espaços em branco em volta da string</h2>
    <?php
        $stringComEspacosEmvolta = "   três espaços em cada lado   ";
        echo "{".$stringComEspacosEmvolta."}<br/>";
        //Remove espacos em volta da string
        $stringComEspacosEmvolta = trim($stringComEspacosEmvolta);
        echo "{".$stringComEspacosEmvolta."}<br/>";
    ?>
    <h2>Removendo espaços em branco a esquerda da string</h2>
    <?php
        $stringEspacosAesquerda = "   Três espaços a esquerda";
        echo "{".$stringEspacosAesquerda."}<br/>";
        //Remove espaços a esquerda
        $stringEspacosAesquerda = ltrim($stringEspacosAesquerda);
        echo "{".$stringEspacosAesquerda."}<br/>";
    ?>
    <h2>Removendo espaços a direita da string</h2>
    <?php
        $stringEspacosAdireita = "Três espacos a direita   ";
        echo "{".$stringEspacosAdireita."}<br/>";
        //Remove espaços a direita
        $stringEspacosAdireita = rtrim($stringEspacosAdireita);
        echo "{".$stringEspacosAdireita."}<br/>";
    ?>
</body>
</html>