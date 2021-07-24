<?php
$arr1=[1,3,5,4,2,1,1];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Array</title>
    <style>

        .contai{
            display:flex;
            width: 750px;
            flex-wrap:wrap;
        }
        .kotak{
            width: 100px;
            height: 100px;
            background-color:red;
            margin:3px;
            text-align:center;
            line-height:100px;  
        }
    </style>
</head>
<body>
    <div class="contai">
    <?php for($i=0;$i<count($arr1);$i++) : ?>
        <div class="kotak"><?= $arr1[$i];  ?></div>
    <?php endfor ?>

    <?php foreach($arr1 as $a) : ?>
     <div class="kotak"><?= $a ?></div>
     <?php endforeach ?>   
    </div>
</body>
</html>

