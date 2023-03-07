<h1>IF</h1>
<?php
    /* IF em PHP
     * De acordo com o valor da variável */

$saldoBancario;

    $saldoBancario = 42389.50;
    if ($saldoBancario >= 42390){
        echo "Vou comprar um carro 0km";
    } 
    else {
        echo "Vou comprar um usado";
    }
?>

<h1>Switch</h1>
<?php
/* Demonstração de switch em php
Mensagem de erro/sucesso para validaçõ de fomulários
*/

$quantidadedeErros = 3;
switch ($quantidadedeErros) {
    case 0:
        $mensagemdeErro = "nenhum";
        break;
    case 1:
        $mensagemdeErro = "um";
        break;
    case 2:
        $mensagemdeErro = "dois";
        break;

    default:
        $mensagemdeErro = "Mais de dois";
    }

    $mensagemdeErro ="erros encontrados";
    echo $mensagemdeErro;
?>  

<h1>While</h1>
<?php
    $contador = 0;
    while ($contador++ <10){
        echo $contador. "</br>";
    }
?>

<h1>for</h1>
<?php
    for($contador=1;$contador <=10; $contador++){
        echo $contador ."<br/>";
    }
?>

