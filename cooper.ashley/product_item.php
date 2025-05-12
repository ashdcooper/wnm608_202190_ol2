<?php

include_once "lib/php/functions.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];


?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Wine Choice</title>

	<?php include "parts/meta.php"; ?>

</head>
<body>
	
	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft images-main">
					<img src="img/<?= $product->thumbnail ?>" alt="">
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="card soft flat">
					<div class="card-section">
						<h2 class="product-name"><?= $product->name ?></h2>
						<div class="product-price">&dollar;<?= $product->price ?> </div>
					</div>

					<div class="card-section">
						<label for="product-amount" class="form-label">Amount</label>
						<div class="form-select" id="product-amount">
							<select>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
								<option>9</option>
								<option>10</option>
							</select>
						</div>
					</div>

					<div class="card-section-button">
						<a href="product_add_to_cart.php?id=<?= $product->id ?>" style="background-color: var(--color-neutral-light);border-radius: 0.2em;cursor: pointer;text-align: center;padding: 0.5em 1em;text-decoration: none;font-weight: initial;">Add To Cart</a>
					</div>
				</div>
			</div>

		</div>

		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card hard medium">
					<p><?= $product->description ?></p>
				</div>
			</div>
		</div>

	</div>


</body>
</html>