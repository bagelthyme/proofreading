<?php
  // $targetDir = 'uploads/';
  // $targetFile = $targetDir . basename($_FILES['fileUpload']["name"]);
  // $file_type = $_FILES['fileUpload']['type'];
  // $file_ext = strtolower(end(explode('.',$_FILES['fileUpload']['name'])));
  // $uploadOk = 1;

  // $extensions= array("pdf", "doc", "docx");

  // if(in_array($file_ext,$extensions)=== false){
  //     $errors[]="extension not allowed.";
  // }

  // if(empty($errors)==true){
  //     move_uploaded_file($_FILES['fileUpload']["tmp_name"], $targetFile);
  //     echo "Success";
  // }else{
  //     print_r($errors);
  // }
?>



<!DOCTYPE html>
<html></<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include 'header.php';?>
  <body>
    <div class="grid-container-services">
      <?php include 'navigation.php';?>

      <div class="grid-item confirmation-container">

        <div class="actionEditing">
          <form class="checkoutForm" id="confirmationForm" method='post' action='uploads.php' enctype='multipart/form-data'>
            <div id="checkoutSection">
              <label for="pages">Upload your files. Only accepts PDF format.</label><br><br>
              <input type='file' name='fileUpload'><br>
              <!-- <input type="text" id="fname" name="fname" value="0"><br> -->
              <textarea placeholder="Optional message..."></textarea><br>
              <input class="btn" type="submit">
            </div>
          </form>
        </div>

      </div>

    <?php include 'footer.php';?>
    </div>
  </body>
</html>
