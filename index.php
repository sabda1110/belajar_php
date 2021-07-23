<?php
function tgl_lahir($nama="admin",$lahir){
    echo "Selamat Datang $nama <br>";
    echo "NAMA :".$nama."<br>";
    echo "TGL  :".$lahir."<br>";
    echo "Hari :".date("l",strtotime($lahir));
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar User Defined Function</title>
</head>
<body>
    <?php tgl_lahir("Sabda","12 octo 2000");  ?>
</body>
</html>