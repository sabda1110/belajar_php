<?php
require 'function.php';

$npm=$_GET["npm"];

$data=perintah("SELECT * FROM mahasiswa WHERE npm=$npm")[0];


if(isset($_POST["submit"])){
    if(update($_POST)>0){
        echo "
             <script>
             alert('Data Di Update');
             document.location.href='index.php';
             </script> ";
    }else{
        echo "
             <script>
             alert('Data Gagal Di Update');
             document.location.href='index.php';
             </script> ";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <input type="hidden" name="npm" value=<?=$data["npm"];?>>
            <input type="hidden" name="gambarlama" value=<?=$data["gambar"];?>>
            <tr>
                <td><label for="nama">NAMA</label></td>
                <td><input type="text" name="nama" id="nama" value=<?=$data["nama"];?>></td>
            </tr>
            <tr>
                <td><label for="kelas">kelas</label></td>
                <td><input type="text" name="kelas" id="kelas" value=<?=$data["kelas"];?>></td>
            </tr>
            <tr>
                <td><label for="email">EMAIL</label></td>
                <td><input type="text" name="email" id="email" value=<?=$data["email"];?>></td>
            </tr>
            <tr>
                <td><label for="gambar">GAMBAR</label></td>
                <td><img src="gambar/<?=$data["gambar"]?>" alt="" class="gambar"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="file" name="gambar" id="gambar" ></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">TAMBAH</button></td>
            </tr>
            
        </table>
    </form>
</body>
</html>