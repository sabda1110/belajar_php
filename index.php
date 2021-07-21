<?php
 //Penulisan HTML dalam PHP
 echo "<h1>Sabda Setiawan </h1>"; 
  $nama = "SABDA";
?>

<!DOCTYPE html>
<html lang="en">
<!-- Penulisan PHP dalam HTML -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $nama; ?></h1>
</body>
</html>



<?php
//OPERATOR
//Aritmatika (+ , - , / , * , %)
$a=5;
$b=6;
echo $a+$b;

//Pengabungan Cincatenation  (.)
$nama="sabda";
$belakang = "Setiawan"
echo $nama." ".$belakang;

//Assigment (= , += , -= , /= ,*= , %=, .=)
$a=5;
$a *= 2;

//Perbandingan (>,<,>=,<=,==,!=)
var_dump($a<$b);

//Identitas dari sebua nilai
var_dump($b === "6");

//Logika
var_dump($a>60 && $b<20);
?>