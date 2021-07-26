<?php
if(isset($_POST["submit"])){
  if($_POST["username"]=="admin" && $_POST["password"]=="admin"){
    header("Location:page2.php");
    exit;
  }else{
    $eror=true;
  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>belajar Methode Request POST (LOGIn)</title>
</head>
<body>
  <h1>LOGIN ADMIN</h1>
  <?php if(isset($eror)): ?>
  <p style="color:red;font-style:italic;font-weight:bold;">Username /Password Salah</p>
  <?php endif ?>  

  
  <form action="" method="post">
    <table>
      <tr>
        <td>
          <label for="username">username :</label>
        </td>
        <td>
          <input type="text" name="username" id="username">
        </td>
      </tr>
      <tr>
        <td>
          <label for="password">password :</label>
        </td>
        <td>
          <input type="password" name="password" id="password">
        </td>
      </tr>
      <tr>
        <td><button type="submit" name="submit">LOGIN</button></td>
      </tr>
    </table>
  </form>
</body>
</html>