<?php
session_start();

if(!isset($_SESSION["login"])){
  header("Location:login.php");
  exit;
}
require 'function.php';



if(isset($_POST["submit"])){
    if(tambah($_POST)>0){
        echo "
             <script>
             alert('Data Di Tambahkan');
             document.location.href='index.php';
             </script> ";
    }else{
        echo "
             <script>
             alert('Data Gagal Di Tambahkan');
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
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label for="npm">NPM</label></td>
                <td><input type="number" name="npm" id="npm"></td>
            </tr>
            <tr>
                <td><label for="nama">NAMA</label></td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td><label for="kelas">KELAS</label></td>
                <td><input type="text" name="kelas" id="kelas"></td>
            </tr>
            <tr>
                <td><label for="email">EMAIL</label></td>
                <td><input type="text" name="email" id="email"></td>
            </tr>
            <tr>
                <td><label for="gambar">GAMBAR</label></td>
                <td><input type="file" name="gambar" id="gambar"></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">UPDATE</button></td>
            </tr>
            
        </table>
    </form>
</body>
</html>