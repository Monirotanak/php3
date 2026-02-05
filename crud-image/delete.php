<?php
    require 'connection.php';
    $id=$_GET['id'];
    $delete="DELETE FROM tbl_product WHERE id='$id'";
    $result=$conn->query($delete);
    if($result){
        header('location:table.php');
    }
    