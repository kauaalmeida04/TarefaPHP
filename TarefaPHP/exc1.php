<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <form action="#" method="POST">
        <p>Insira o valor da altura do retangulo:</p>
        <input type="number" name="altura">
        <p>Insira o valor da base do retangulo:</p>
        <input type="number" name="base"><br>
        <input type="submit" value="Calcular"><br>
        <br>
    </form>
</body>
</html>

<?php
 if (!empty($_POST['altura']) & !empty($_POST['base'])){
    $altura = $_POST["altura"]; 
    $base = $_POST["base"];
   
    $area = $altura * $base;
    $perimetro = ($altura + $base)/2;
   
    echo "$area <br>";
    echo $perimetro;
 }
 else {
     echo "Insira valor!"; 
 }

?>