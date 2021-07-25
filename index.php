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
    
  <?php foreach($arr as $a) : ?>
    <ul>
      <li><img src="gambar/<?= $a["gambar"];?>" alt=""></li>
      <li>Barang :<?= $a["nama"];?></li>
      <li>Stok   :<?= $a["stok"];?></li>
      <li>Harga  :<?= $a["harga"];?></li>
    </ul>
  <?php endforeach;   ?>
  
</div>
</body>
</html>