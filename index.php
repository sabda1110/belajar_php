<?php
//Belajar Function Built-in Function
 $kondisi1=date("d-M-Y",time()+60*60*24*3);
 $kondisi2=date("l",mktime(0,0,0,11,1,2000));
 $kondisi3=date("l",strtotime("12 october 2000"));


 echo $kondisi1."<br>";
 echo $kondisi2."<br>";
 echo $kondisi3;



?>