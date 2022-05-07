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
        <p>Insira a temperatura em Fahrenheit:</p>
        <input type="number" name="temperatura">
        <input type="submit" value="Calcular"><br>
        <br>
    </form>
</body>
</html>

<?php
 if (!empty($_POST['temperatura'])) {
    $temperatura = $_POST["temperatura"];
   
    $celsius = ($temperatura - 32)/ 1.8;
   
    echo $celsius;
 }
 else {
     echo "Insira valor!"; 
 }

?>