<?php
   include 'connection.php';
   if(isset($_POST['delete'])){
    $id = $_POST['id'];
    $delete = "DELETE FROM tbl_employee WHERE id='$id'";
    $rs=mysqli_query($conn,$delete);
    if($rs){
     header('location: table.php');
    }
    
   }

?>