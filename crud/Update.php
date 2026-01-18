<?php
   include 'connection.php';
   if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email= $_POST['email'];
    $gender= $_POST['gender'];
    $position= $_POST['position'];
    $salary= $_POST['salary'];
    $update = "UPDATE tbl_employee SET name='$name', email='$email', gender='$gender', position='$position', salary='$salary' WHERE id='$id'";
    $rs=$conn->query($update);
    if($rs){
     header('location: table.php');
    }
   }
   
?>