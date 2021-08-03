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
    $gambar=upload();

    if(!$gambar){
        return false;
    }

     
    $query="INSERT INTO mahasiswa VALUES ($npm,'$nama','$kelas','$email','$gambar')";
    mysqli_query($koneksi,$query);
    
    return mysqli_affected_rows($koneksi);
    

}

function upload(){
    $namaFile=$_FILES["gambar"]["name"];
    $ukuranFile=$_FILES["gambar"]["size"];
    $error=$_FILES["gambar"]["error"];
    $tmpName=$_FILES["gambar"]["tmp_name"];

    if($error===4){
        echo "<script>
               alert('Pilih Gambar Terlebih Dahulu');
              </script>";
              return false;
    }

    //Cek Apakah data yang di upload adalah gambar
     $ekstensifilevalid=['jpg','jpeg','png'];
     $ekstensigambar=explode('.', $namaFile);
     $ekstensigambar=strtolower(end($ekstensigambar));
     if(!in_array($ekstensigambar,$ekstensifilevalid)){
        echo "<script>
               alert('Data Yang Dimasukan Tidak Gambar');
              </script>";
              return false; 
     }

     $namaFilebaru=uniqid();
     $namaFilebaru.='.';
     $namaFilebaru.=$ekstensigambar;


     //Bila Pengecekan Berhasil 
     move_uploaded_file($tmpName,'gambar/'.$namaFilebaru);
     return $namaFilebaru;

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
    $gambarlama=($data["gambarlama"]);
    if($_FILES["gambar"]["error"]===4){
        $gambar=$gambarlama;
    }else{
        $gambar=upload();
    }
     
    $query="UPDATE mahasiswa SET 
            nama='$nama',
            kelas='$kelas',
            email='$email',
            gambar='$gambar' WHERE npm=$npm";
    mysqli_query($koneksi,$query);
    
    return mysqli_affected_rows($koneksi);
      
}

function cari($keywoard){
    $query="SELECT * FROM mahasiswa WHERE npm='$keywoard'";

    return perintah($query);
}


?>