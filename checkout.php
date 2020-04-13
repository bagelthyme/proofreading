<!DOCTYPE html>
<html></<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include 'header.php';?>
  <body>
    <div class="grid-container-services">
      <?php include 'navigation.php';?>

      <div class="grid-item confirmation-container">

        <div class="actionEditing">
          <form id="confirmationForm">
            <label>
              <label for="pages">Upload your file here...</label><br>
              <input type="text" id="fname" name="fname" value="0"><br>
              <textarea></textarea><br>
            </label>
          </form>
        </div>

      <div>
        <div class="confirmationEditing">Totla price:</div>
        <button id="checkoutButton">Checkout</button>
      </div>
    </div>


      <?php include 'footer.php';?>
    </div>
  </body>
</html>
