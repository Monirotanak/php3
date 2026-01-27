<?php
    include 'connection.php';
    if(isset($_POST['btnDelete'])){
        $id=$_POST['id'];
        $delete="DELETE FROM tbl_product WHERE id='$id'";
        $execute=mysqli_query($conn,$delete);
        if($execute){
            echo '<script> alert("Data Deleted Successfully") </script>';
            header("Location: table.php");
        }
    }