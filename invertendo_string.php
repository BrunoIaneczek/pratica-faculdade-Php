<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>Invertendo uma string em PHP</h1>
    <?php
        $stringNormal = "UNIASSELVI";
        echo $stringNormal."<br/>";
        $stringInvertida = strrev($stringNormal);
        echo $stringInvertida;
    ?>
</body>
</html>