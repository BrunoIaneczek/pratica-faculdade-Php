<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Continuando estudos de arrays</title>
</head>
<body>
    <h1>Aqui continuaremos a estudar arrays</h1>
    <?php
        $array = array("U","N","I","A","S","S","E","L","V","E");
        $array["meio"] = "LV";
        $array["ultimaletra"] = "I";
        print_r($array);
    ?>
    <h1>Imprimindo array:</h1>
    <?php
        foreach ($array as $valor){
            echo $valor;
        }
    ?>
    <h1>Imprimindo array com quebra de linha:</h1>
    <?php
        foreach ($array as $valor){
            echo $valor."<br/>";
        }
    ?>
</body>
</html>