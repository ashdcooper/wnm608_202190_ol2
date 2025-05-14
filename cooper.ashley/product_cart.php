<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

// $cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (3,5,7)");


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
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft" style="text-align: left">
					<?= array_reduce($cart_items, 'cartListTemplate') ?>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="card soft flat" style="text-align: left">
					<?= cartTotals() ?>
			</div>
		</div>
	</div>


</body>
</html>