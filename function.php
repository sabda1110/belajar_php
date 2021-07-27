<?php
$koneksi =mysqli_connect("localhost","root","","belajar_php");

function perintah($surat){
    global $koneksi;
    $result=mysqli_query($koneksi,$surat);
    $rows=[];
    while($row=mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}

?>