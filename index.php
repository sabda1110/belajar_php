<?php
require 'function.php';
$mahasiswa = perintah("SELECT * FROM mahasiswa");

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
 <table border="1" cellpadding="10" cellspacing="0">
   <tr>
     <th>NPM</th>
     <th>NAMA</th>
     <th>KElAS</th>
     <th>EMAIL</th>
     <th>AKSI</th>
   </tr>
          <?php foreach($mahasiswa as $data) :?>
            <tr>
           <td><?=$data["npm"]; ?></td>
           <td><?=$data["nama"]; ?></td>
           <td><?=$data["kelas"]; ?></td>
           <td><?=$data["email"]; ?></td>
           <td>
             <a href="">UPDATE</a>
             <a href="page2.php?npm=<?=$data["npm"];?>">DELETE</a>
           </td>
           </tr>
    <?php endforeach; ?>
   
 </table> 
</body>
</html>