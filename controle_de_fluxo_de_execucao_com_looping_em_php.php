<h1>A variável não está declarada</h1>
<?php
    //Declara uma váriavel nula:
    $variavel;
    if (isset($variavel)) {
        echo "A variavel esta declarada";
    } else {
        echo "A variavel não está declarada";
    }

?>
<h1>A variável está declarada</h1>
<?php
    //Declara uma variável e a inicializa:
    $variavel = "variável";
    if (isset($variavel)) {
        echo "A variável está declarada";
    }else{
        echo "A variável não está declarada";
    }
?>