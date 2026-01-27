<?php
   if(isset($_POST['submit'])){
    if(!is_dir('uploads')){
        mkdir('uploads',0777,true);
    }
    $file=$_FILES['file']['name'];
    $tmp_name=$_FILES['file']['tmp_name'];
    $path="uploads/".$file;
    move_uploaded_file($tmp_name,$path);

   }
?>