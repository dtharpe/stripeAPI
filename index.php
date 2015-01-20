<?php require_once('./config.php'); ?>

<form action="charge.php" method="post">
  <script src="https://checkout.stripe.com/checkout.js"
    class="stripe-button"
    data-name="My Factory"
    data-key="<?php echo $stripe['publishable_key']; ?>"
    data-amount="5000"
    data-image="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcT7hsaWBHNfdC1Kd7Hho6ns_Y9frwtMfS2ASViuxrGfw5sbMdKZ"
    data-description="One year's subscription"
    data-label="Pay Here!"
    data-shipping-address="true"
    data-billing-address="true">
  </script>
</form>
