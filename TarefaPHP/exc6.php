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
        <p>Insira um número:</p>
        <input type="number" name="num1">
        <p>Insira o  segundo número:</p>
        <input type="number" name="num2"><br>
        <input type="submit" value="Calcular"><br>
        <br>
    </form>
</body>
</html>

<?php
 if (!empty($_POST['num1']) & !empty($_POST['num2'])){
    $num1 = $_POST["num1"]; 
    $num2 = $_POST["num2"];
   
    $quociente = $num1 / $num2;
    $resto = $num1 % $num2;
   
    echo "$quociente <br>";
    echo $resto;
 }
 else {
     echo "Insira valor!"; 
 }

?>