<?php
   $conn = mysqli_connect('localhost', 'root','', 'db_structure_11.12',3306);
   if($conn){
      echo 'connection';
   }else{
    echo 'can not connect';
   }
?>