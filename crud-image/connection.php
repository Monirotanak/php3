<?php
   try {
      $conn = mysqli_connect('Localhost','root','','db_structure_11.12');
   } catch (Exception $e) {
      echo $e->getMessage();
   }
?>