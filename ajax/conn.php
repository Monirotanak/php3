<?php
   try{
    $conn=mysqli_connect('127.0.0.1', 'root', '', 'db_structure 11.12', '3306');
   }catch(Exception $th){
    echo "Connection Failed: ".$th->getMessage();
   }
?>