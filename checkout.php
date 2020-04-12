<?php
  $targetDir = 'uploads/';
  $targetFile = $targetDir . basename($_FILES['fileUpload']["name"]);
  $file_type = $_FILES['fileUpload']['type'];
  $file_ext = strtolower(end(explode('.',$_FILES['fileUpload']['name'])));
  $uploadOk = 1;

  $extensions= array("pdf", "doc", "docx");
      
  if(in_array($file_ext,$extensions)=== false){
      $errors[]="extension not allowed.";
  }
  
  if(empty($errors)==true){
      move_uploaded_file($_FILES['fileUpload']["tmp_name"], $targetFile);
      echo "Success";
  }else{
      print_r($errors);
  }

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
          <form id="confirmationForm" method='post' action='' enctype='multipart/form-data'>
            <label>
              <label for="pages">Upload your file here...</label><br>
              <input type='file' name='fileUpload'>
              <input type="text" id="fname" name="fname" value="0"><br>
              <textarea></textarea><br>
              <input type="submit">
            </label>
          </form>
        </div>

      <div>
        <div class="confirmationEditing">Total price:</div>
        <button id="checkoutButton">Checkout</button>
      </div>
    </div>

    <?php include 'footer.php';?>
    </div>

  </body>
</html>
