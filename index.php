<?php
$mahasiswa = [
               ["193510101","Sabda Setiawan","4B","3.8"],
               ["193510102","Budi Ariandi","4A","3.9"],
               ["193510103","Sardi Ariandi","4C","3.2"]

];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    
        <?php foreach($mahasiswa as $a) : ?>
         <ul>
         <li>NPM   :<?=$a[0];?></li>
         <li>NAMA  :<?=$a[1];?></li>
         <li>KELAS :<?=$a[2];?></li>
         <li>IPK   :<?=$a[3];?></li>
         </ul>
        <?php endforeach ?>    
    
</body>
</html>