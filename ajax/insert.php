<?php
  require 'conn.php';
  if(isset($_SERVER['REQUEST_METHOD'])=='POST'){
    if(!is_dir('profile')){
        mkdir('profile',0777,true);
    }
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $file=$_FILES['profile']['name'];
    $tmp_name=$_FILES['profile']['tmp_name'];
    $path='profile/'.time().'-'.$file;
    move_uploaded_file($tmp_name,$path);
    $insert="INSERT INTO tbl_student(name,gender,profile) 
    VALUES('$name','$gender','$path')";
    $ex=$conn->query($insert);
    $select="SELECT * FROM tbl_student ORDER BY id DESC LIMIT 1";
    $result=$conn->query($select);
    $row=mysqli_fetch_assoc($result);
    echo $row['id'];
  }
    
?>