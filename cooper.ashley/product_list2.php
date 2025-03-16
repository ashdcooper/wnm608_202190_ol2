<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Wine Cellar</title>

<?php include "parts/meta.php"; ?>

</head>
<body>

	
	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<div class="card soft">
			<h2>Wine Cellar Selection</h2>

			<!-- ul>li*4>a[href="product_item.php"]>{Wine Name $} -->
			<ul>
				<li><a href="product_item.php?id=1">Wine Name 1</a></li>
				<li><a href="product_item.php?id=2">Wine Name 2</a></li>
				<li><a href="product_item.php?id=3">Wine Name 3</a></li>
				<li><a href="product_item.php?id=4">Wine Name 4</a></li>
			</ul>
		</div>
	</div>

<?php echo "Test Update"; ?>


</body>
</html>