<?php
   require 'conn.php';
    $id=$_POST['id'];
    $delete="DELETE FROM tbl_student WHERE id='$id'";
    $ex=$conn->query($delete);
?>