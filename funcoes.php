<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Declarando funções</title>
</head>
<body>
    <h1>Declarando funções</h1>
    <?php
        //Declara uma função para somar dois valores
        function soma($valor1, $valor2){
            $resultado = $valor1 + $valor2;
            return $resultado;
        }
    ?>
    <h2>Agora vamos usar a função com os valores 3 e 6</h2>
    <?php
        $tres = 4;
        $seis = 10;
        echo "O valor da soma entre ".$tres." e ".$seis."   é ". soma($tres, $seis);
    ?>
</body>
</html>