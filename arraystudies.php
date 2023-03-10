<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudando arrays em PHP</title>
</head>
<body>
    <?php
        //Declaração de um array
        //Note que podemos insereri tantos tipos
        //numéricos quanto strings
        //Em seguida obtemos o valor de cada posição no array
        //Utilizando o nome da variavel seguido do indice da posição
        //entre colchetes
        //Note que indice inicia em zero

        $meuPrimeiroArray = array(1, 2, 3, "quatro", 5);
        echo $meuPrimeiroArray[0]."<br/>";
        echo $meuPrimeiroArray[1]."<br/>";
        echo $meuPrimeiroArray[2]."<br/>";
        echo $meuPrimeiroArray[3]."<br/>";
        echo $meuPrimeiroArray[4]."<br/>";

        //Declaração de um array vazio
        $arrayVazio = array();

        //Note que a variavel array está definida
        if (isset($arrayVazio)){
            echo "O array vazio está declarado! <br/>";
        }

        //Porém nenhum índice possui valor
        //Por exemplo, tentamos acessar o índice zero
        if(isset($arrayVazio[0])){
            //Não vai passar aqui!
            echo "A primeira posição do array vazio está declarada!<br/>";
        }
    ?>
    <h1>Imprimindo arrays com PRINT_R em PHP</h1>
    <?php
        print_r($meuPrimeiroArray);
        echo "<br/>";
        print_r($arrayVazio);
    ?>  
    <h1>Removendo elementos do array em PHP</h1>
    <?php
        unset($meuPrimeiroArray[1]);
        print_r($meuPrimeiroArray);
        echo "<br/>";
        if (isset($meuPrimeiroArray[1])){
            echo "Ainda está declarado <br/>";
        } else{
            echo"Foi destruído!<br/>";
        }
    ?>
    <h1>Contando elementos de um array em PHP</h1>
    <?php
        echo count($meuPrimeiroArray);
        echo "<br/>";
        echo sizeof($meuPrimeiroArray);
        echo "<br/>";
    ?>
</body>
</html>