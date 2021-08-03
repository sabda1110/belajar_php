<?php
require 'function.php';
$mahasiswa = perintah("SELECT * FROM mahasiswa");

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
  <title>belajar Menampilkan</title>
</head>
<body>
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
           <td><img src="gambar/<?=$data["gambar"];?>" alt=""></td>
           <td>
             <a href="update.php?npm=<?=$data["npm"];?>">UPDATE</a>
             <a href="hapus.php?npm=<?= $data["npm"];?>"onclick="return confirm('Yakin ?')">DELETE</a>
           </td>
           </tr>
    <?php endforeach; ?>
   
 </table> 
</body>
</html>