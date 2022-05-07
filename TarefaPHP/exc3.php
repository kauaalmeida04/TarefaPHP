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
        <p>Insira o valor do raio:</p>
        <input type="number" name="raio">
        <input type="submit" value="Calcular"><br>
        <br>
    </form>
</body>
</html>

<?php
 if (!empty($_POST['raio'])) {
    $raio = $_POST["raio"]; 
   
    $area = 3.14 *($raio * $raio);
    $perimetro = 2 * 3.14 * $raio;
   
    echo "$area <br>";
    echo $perimetro;
 }
 else {
     echo "Insira valor!"; 
 }

?>