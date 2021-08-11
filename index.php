<?php
session_start();

if(!isset($_SESSION["login"])){
  header("Location:login.php");
  exit;
}

require 'function.php';
$jumlahdataperhalam=3;
$jumlahdata = count(perintah("SELECT * FROM mahasiswa"));
$jumlahhalaman = ceil($jumlahdata/$jumlahdataperhalam);
if(isset($_GET["page"])){
  $halamanaktif=$_GET["page"];
}else{
  $halamanaktif=1;
}

$nilaiawal = ($jumlahdataperhalam*$halamanaktif) - $jumlahdataperhalam;


$mahasiswa = perintah("SELECT * FROM mahasiswa LIMIT $nilaiawal,$jumlahdataperhalam");

if(isset($_POST["cari"])){
  $mahasiswa = cari($_POST["data"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>belajar Menampilkan</title>
</head>
<body>
 <a href="logout.php" class="logout">LOGOUT</a> 
  <h1 style="text-align: center;">Data Mahasiswa</h1>
<form action="" method="post">
        <input type="text" name="data" autofocus autocomplete placeholder="Masukan NPM"> 
        <button type="submit" name="cari" style="margin-bottom:10px;" >Cari</button>
        
</form>
 <table border="1" cellpadding="10" cellspacing="0">
   <tr>
     <th>NPM</th>
     <th>NAMA</th>
     <th>KElAS</th>
     <th>EMAIL</th>
     <th>GAMBAR</th>
     <th>AKSI</th>
   </tr>
          <?php foreach($mahasiswa as $data) :?>
            <tr>
           <td><?=$data["npm"]; ?></td>
           <td><?=$data["nama"]; ?></td>
           <td><?=$data["kelas"]; ?></td>
           <td><?=$data["email"]; ?></td>
           <td><img src="gambar/<?=$data["gambar"];?>" alt="" class="gambar"></td>
           <td>
             <a href="update.php?npm=<?=$data["npm"];?>">UPDATE</a>
             <a href="hapus.php?npm=<?= $data["npm"];?>"onclick="return confirm('Yakin ?')">DELETE</a>
           </td>
           </tr>
    <?php endforeach; ?>   
 </table> 

 <?php if($halamanaktif>1) : ?>
  <a href="index.php?page=<?=$halamanaktif-1?>">&laquo</a>
 <?php endif ?> 
 <?php for($i=1;$i<=$jumlahhalaman;$i++) : ?>
  <?php if($i==$halamanaktif) : ?>
    <a href="index.php?page=<?=$i?>" style="color:red"><?=$i?></a> 
  <?php else : ?>
    <a href="index.php?page=<?=$i?>"><?=$i?></a> 
  <?php endif ?>  
 <?php endfor ?>
 <?php if($halamanaktif<$jumlahhalaman) : ?>
  <a href="index.php?page=<?=$halamanaktif+1?>">&raquo</a>
 <?php endif ?> 
</body>
</html>