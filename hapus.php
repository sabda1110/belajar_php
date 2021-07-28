<?php
require 'function.php';
$npm=$_GET["npm"];


if(hapus($npm)>0)
{
    echo "
    <script>
    alert('Data Di hapus');
    document.location.href='index.php';
    </script> ";
}else{
    echo "
     <script>
     alert('Data Gagal Di hapus');
     document.location.href='index.php';
     </script> ";
}



?>