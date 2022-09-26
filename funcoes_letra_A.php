<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Funçoes tabuada</title>
</head>
<body>
<h1>Exercício Funções Letra A - Tabuada</h1>
    <?php
    echo '<h2>'.'Tabuada um a um'.'</h2>';
    function tabuada_v01($n){
        $n = 2;
        $i = 1;
        echo $n." x ".$i." = ".$n*$i.'<br>';
        $i= $i+1;
        echo $n." x ".$i." = ".$n*$i.'<br>';
        $i= $i+1;
        echo $n." x ".$i." = ".$n*$i.'<br>';
        $i= $i+1;
        echo $n." x ".$i." = ".$n*$i.'<br>';
        $i= $i+1;
        echo $n." x ".$i." = ".$n*$i.'<br>';
        $i= $i+1;
        echo $n." x ".$i." = ".$n*$i.'<br>';
        $i= $i+1;
        echo $n." x ".$i." = ".$n*$i.'<br>';
        $i= $i+1;
        echo $n." x ".$i." = ".$n*$i.'<br>';
        $i= $i+1;
        echo $n." x ".$i." = ".$n*$i.'<br>';
        $i= $i+1;
        echo $n." x ".$i." = ".$n*$i.'<br>';
        $i= $i+1;
    }

    tabuada_v01(2);
    echo '<h2>'.'Tabuada com For'.'</h2>';
    function tabuada_v02($n){
        for($i = 0;$i <=10; $i++){
            echo '<p>'.$n.' x '.$i.' = '.$n*$i.'</p>';
        }
    }
    tabuada_v02(2);
    ?>
    
</body>
</html>