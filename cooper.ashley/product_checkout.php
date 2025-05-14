<?php

include_once "lib/php/functions.php";

?><html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Checkout Page</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	
	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<div class="card soft" id="checkout-page">
  <h2>Checkout</h2>
  <form style="text-align:left;">

    <h3>Billing Information</h3>
    <div class="form-control">
      <label class="form-label">Full Name</label>
      <input type="text" placeholder="John Doe" class="form-input" required>
    </div>
    <div class="form-control">
      <label class="form-label">Email Address</label>
      <input type="email" placeholder="john@example.com" class="form-input" required>
    </div>
    <div class="form-control">
      <label class="form-label">Phone Number</label>
      <input type="tel" placeholder="(123) 456-7890" class="form-input">
    </div>
    <div class="form-control">
      <label class="form-label">Billing Address</label>
      <input type="text" placeholder="123 Main St" class="form-input" required>
    </div>
    <div class="form-control">
      <label class="form-label">City</label>
      <input type="text" class="form-input">
    </div>
    <div class="form-control">
      <label class="form-label">State</label>
      <input type="text" class="form-input">
    </div>
    <div class="form-control">
      <label class="form-label">ZIP Code</label>
      <input type="text" class="form-input">
    </div>

    <h3>Shipping Information</h3>
    <div class="form-control">
      <label class="form-label">Shipping Address</label>
      <input type="text" placeholder="123 Main St" class="form-input" required>
    </div>
    <div class="form-control">
      <label class="form-label">City</label>
      <input type="text" class="form-input">
    </div>
    <div class="form-control">
      <label class="form-label">State</label>
      <input type="text" class="form-input">
    </div>
    <div class="form-control">
      <label class="form-label">ZIP Code</label>
      <input type="text" class="form-input">
    </div>

    <h3>Payment Information</h3>
    <div class="form-control">
      <label class="form-label">Cardholder Name</label>
      <input type="text" class="form-input" placeholder="John Doe">
    </div>
    <div class="form-control">
      <label class="form-label">Card Number</label>
      <input type="text" class="form-input" placeholder="1234 5678 9012 3456">
    </div>
    <div class="form-control">
      <div class="flex-stretch">
        <label class="form-label">Expiration Date</label>
        <input type="text" class="form-input" placeholder="MM/YY">
      </div>
      <div class="flex-stretch">
        <label class="form-label">CVV</label>
        <input type="text" class="form-input" placeholder="123">
      </div>
    </div>

    <!-- Order Summary (Example placeholder) -->
    <h3>Order Summary</h3>
    <div class="form-control">
      <p>Item: Example Product</p>
      <p>Quantity: 1</p>
      <p>Total: $99.99</p>
    </div>

    <div class="form-control">
      <!-- <button type="submit" class="form-button">Place Order</button> -->
      <a href="product_confirmation.php" style="background-color: var(--color-neutral-light);border-radius: 0.2em;cursor: pointer;text-align: center;padding: 0.5em 1em;text-decoration: none;font-weight: initial;">Complete Checkout</a>
    </div>

  </form>
</div>

	</div>


</body>
</html>