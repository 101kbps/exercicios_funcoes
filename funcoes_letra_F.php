<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca Texto</title>
</head>
<body>
<h1>Exercício Funções Letra F- Busca Texto</h1>
    <?php

    function buscaTexto($texto,$busca){

        $vetor_busca[] =$busca;
        $vetor_substituir = array("<spam style=\"color: red\">".$busca."</spam>");

         $novafrase = str_replace($vetor_busca, $vetor_substituir,$texto);

        return $novafrase;
    }

    $texto = "Estou cansada de fazer o dever pelos outros e não me sentir valorizada.";
    $busca = "cansada";
           
    echo buscaTexto($texto,$busca);

    ?>
</body>
</html>
