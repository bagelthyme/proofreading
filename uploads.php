<?php
   if(isset($_FILES['fileUpload'])){
      $errors= array();
      $file_name = $_FILES['fileUpload']['name'];
      $file_size = $_FILES['fileUpload']['size'];
      $file_tmp = $_FILES['fileUpload']['tmp_name'];
      $file_type = $_FILES['fileUpload']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['fileUpload']['name'])));
      
      $extensions= array("pdf","doc","docx");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"uploads/".$file_name);
         include 'success.php';
      }else{
        include 'failure.php';
      }
   }
?>