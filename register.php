<?php
require 'function.php';

if(isset($_POST["regis"]))
{
    if(register($_POST)>0){
        echo "<script>
               alert('Registrasi Berhasi');
              </script>";
    }else{
        echo mysqli_error($koneksi);
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
<body>

<h1>REGISTRASi</h1>

<form action="" method="post">
    <table>
        <tr>
            <td><label for="username">USERNAME: </label></td>
            <td><input type="text" name="username" id="username"></td>
        </tr>
        <tr>
            <td><label for="password">PASSWORD: </label></td>
            <td><input type="password" name="password" id="password"></td>
        </tr>
        <tr>
            <td><label for="password2">CONFIRM PASSWORD: </label></td>
            <td><input type="password" name="password2" id="password2"></td>
        </tr>
        <tr>
            <td><button type="submit" name="regis">REGISTRASI</button></td>
        </tr>
    </table>
</form>
    
</body>
</html>