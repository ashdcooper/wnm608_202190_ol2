<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cart = getCart();


$cart_items = getCartItems();

?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cart Page</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	
	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<h2>In Your Cart</h2>

		<?php 

		if (count($cart)) {
		?>
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft" style="text-align: left">
					<?= array_reduce($cart_items, 'cartListTemplate') ?>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="card soft flat" style="text-align: left">
					<?= cartTotals() ?>
					<div class="card-section-button">
	<a href="product_checkout.php" style="background-color: var(--color-neutral-light);border-radius: 0.2em;cursor: pointer;text-align: center;padding: 0.5em 1em;text-decoration: none;font-weight: initial;">Checkout</a>
</div>	
				</div>
			</div>

		</div>
		<?php
		} else {
			?>
			<div class="card soft">
				<p>Your Cart is Empty</p>
			</div>
			<div class="card soft">
				<h3>Other Recommendations</h3>
				<?php 
				recommendedAnything(6);
				 ?>
			</div>
			<?php
		}
		?>

		 


</body>
</html>