<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (3,5,7)");


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
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<?= array_reduce($cart, 'cartListTemplate') ?>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="card soft flat">
					<div class="card-section display-flex">
						<div class="flex-stretch"><strong>Sub Total</strong></div>
						<div class="flex-none">&dollar;84.49</div>
					</div>
					<div class="card-section display-flex">
						<div class="flex-stretch"><strong>Taxes</strong></div>
						<div class="flex-none">&dollar;6.97</div>
					</div>
					<div class="card-section display-flex">
						<div class="flex-stretch"><strong>Shipping</strong></div>
						<div class="flex-none">&dollar;9.99</div>
					</div>
					<div class="card-section display-flex">
						<div class="flex-stretch"><strong>Total</strong></div>
						<div class="flex-none">&dollar;101.45</div>
					</div>
					<div class="card-section-button">
						<a href="product_checkout.php" style="background-color: var(--color-neutral-light);border-radius: 0.2em;cursor: pointer;text-align: center;padding: 0.5em 1em;text-decoration: none;font-weight: initial;">Checkout</a>
					</div>	
			</div>
		</div>
	</div>


</body>
</html>