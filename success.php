<!DOCTYPE html>
<html></<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include 'header.php';?>
  <body>
    <div class="grid-container-services">
      <?php include 'navigation.php';?>

      <div class="grid-item success-container">

      <div class="grid-item">
        <h2>Thank You</h2>
        <p>Now that your upload was successful, please finish with the PayPal transaction.</p>
        <h3>Basic</h3>
        <div id="paypal-basic"></div>
        <h3>Extended</h3>
        <div id="paypal-extended"></div>
        <h3>Resume</h3>
        <div id="paypal-resume"></div>
      </div>

      </div>
      <?php include 'footer.php';?>
    </div>

    <script src='https://www.paypal.com/sdk/js?client-id=ASLDArFVQ-87lKml1xGttHhXBxnwxye9aO1TyERCJTQ1Xd7y-FWIqLbTeqyR4Zs0z1g50fWR5gsu4ChE'></script>
    <script>
        // paypal.Buttons().render('#paypal-button-container');
        paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '4.00'
          }
        }]
      });
    }
  }).render('#paypal-basic');

    // paypal.Buttons().render('#paypal-button-container');
    paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '5.00'
          }
        }]
      });
    }
  }).render('#paypal-extended');

    // paypal.Buttons().render('#paypal-button-container');
    paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '4.00'
          }
        }]
      });
    }
  }).render('#paypal-resume');
    </script>
  </body>

</html>
