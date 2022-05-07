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
        <p>Insira a idade:</p>
        <input type="number" name="idade">
        <input type="submit" value="Calcular"><br>
        <br>
    </form>
</body>
</html>

<?php
 if (!empty($_POST['idade'])) {
    $idade = $_POST["idade"]; 
    
    $anos = $idade;
    $meses = $idade * 12;
    $dias = $idade * 365;
   
    echo "$anos <br>";
    echo "$meses <br>";
    echo $dias;
 }
 else {
     echo "Insira valor!"; 
 }