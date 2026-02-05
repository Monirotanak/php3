<?php   
    require 'conn.php';
        $id=$_POST['id'];
        $name=$_POST['name'];
        $gender=$_POST['gender'];
        if(!empty($_FILES['profile']['name'])){
            $file=$_FILES['profile']['name'];
            $tmp_name=$_FILES['profile']['tmp_name'];
            $path='profile/'.time().'-'.$file;
            move_uploaded_file($tmp_name,$path);
            $update="UPDATE tbl_student SET name='$name',
            gender='$gender',profile='$path' WHERE id='$id'";
        }else{
            $update="UPDATE tbl_student SET name='$name',
            gender='$gender' WHERE id='$id'";
        }
        $ex=$conn->query($update);