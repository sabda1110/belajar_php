<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php  
      $arr=
      [
        ["nama"=>"beras","stok"=>"12","harga"=>"5000","gambar"=>"jaw tum.jpg"],
        ["nama"=>"gula","stok"=>"4","harga"=>"6000","gambar"=>"jaw tum.jpg"]
      ];
    ?>
<div class="container">
   <h1>Kedai Harian Sabda</h1> 
   <ul> 
  <?php foreach($arr as $a) : ?>
      <li>  
        <!-- Methode request GET -->
        <a href="page2.php?nama=<?= $a["nama"];?>&stok=<?=$a["stok"];?>&harga=<?=$a["harga"];?>&gambar=<?=$a["gambar"];?>">Barang :<?= $a["nama"];?></a>
      </li>
  <?php endforeach;   ?>
  </ul>
</div>
</body>
</html>