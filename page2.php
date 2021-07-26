<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><img src="gambar/<?=$_GET["gambar"]?>"></li>
        <li>Barang : <?=$_GET["nama"];?></li>
        <li>Stok   : <?=$_GET["stok"];?></li>
        <li>Harga  : <?=$_GET["harga"];?></li>
    </ul>
</body>
</html>