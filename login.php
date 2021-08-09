<?php
require 'function.php';
session_start();

if(isset($_COOKIE["id"]) && isset($_COOKIE['key'])){
    $id=$_COOKIE["id"];
    $key=$_COOKIE["key"];
    
    $result=mysqli_query($koneksi,"SELECT username FROM user WHERE id=$id");

    $row =mysqli_fetch_assoc($result);
    if($key === hash('sha256',$row["username"])){
        $_SESSION["login"]= true;
    }



}


if(isset($_SESSION["login"])){
    header("Location:index.php");
    exit;
}


if(isset($_POST["login"])){
    $username=$_POST["username"];
    $password=$_POST["password"];

    $result=mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username'");
    if(mysqli_num_rows($result)===1){
        $row=mysqli_fetch_assoc($result);
        if(password_verify($password,$row["password"])){
            $_SESSION["login"]=true;

            //Pengecekan remeber
            if(isset($_POST["remember"])){
                setcookie("id",$row["id"],time()+3600);
                setcookie("key",hash('sha256',$row["username"]),time()+3600);
            }
            header("Location: index.php");
            exit;
        }
    }
    $error=true;
    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
 
    <h1>LOGIN</h1>
    <?php if(isset($error)):?>
    <p style="color:red; font-style:italic;">usernmae/password salah</p> 
    <?php endif ?>   
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="username">Username</label></td>
                <td><input type="text" name="username" id="username"></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td><input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="remember" id="remember"></td>
                <td><label for="remember">Remember Me</label></td>
            </tr>
            <tr>
                <td><button type="submit" name="login">Login</button></td>
            </tr>
        </table>
    </form>

</body>
</html>