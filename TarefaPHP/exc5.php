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
        <input type="number" name="numero">
        <input type="submit" value="Calcular"><br>
        <br>
    </form>
</body>
</html>

<?php
 if (!empty($_POST['numero'])) {
    $numero = $_POST["numero"]; 
   
    $sucessor = $numero + 1;
   
    echo $sucessor;
 }
 else {
     echo "Insira valor!"; 
 }

?>