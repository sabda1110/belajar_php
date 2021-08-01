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


function tambah($data){
    global $koneksi;
    $npm=$data["npm"];
    $nama=$data["nama"];
    $kelas=$data["kelas"];
    $email=$data["email"];
     
    $query="INSERT INTO mahasiswa VALUES ($npm,'$nama','$kelas','$email')";
    mysqli_query($koneksi,$query);
    
    return mysqli_affected_rows($koneksi);
    

}

function hapus($data){
    global $koneksi;
    mysqli_query($koneksi,"DELETE FROM mahasiswa WHERE npm=$data");
    return mysqli_affected_rows($koneksi);
}

function update($data){
    global $koneksi;
    $npm=htmlspecialchars($data["npm"]);
    $nama=htmlspecialchars($data["nama"]);
    $kelas=htmlspecialchars($data["kelas"]);
    $email=htmlspecialchars($data["email"]);
     
    $query="UPDATE mahasiswa SET 
            nama='$nama',
            kelas='$kelas',
            email='$email' WHERE npm=$npm";
    mysqli_query($koneksi,$query);
    
    return mysqli_affected_rows($koneksi);
      
}

function cari($keywoard){
    $query="SELECT * FROM mahasiswa WHERE npm='$keywoard'";

    return perintah($query);
}


?>