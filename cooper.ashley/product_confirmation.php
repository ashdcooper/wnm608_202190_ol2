<?php

include_once "lib/php/functions.php";
resetCart();

?><html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Confirmation Page</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	
	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<div class="card soft">
			<h2>Thank You For Your Order!</h2>

			<p>Forgot something?</p>
			<p><a href="product_list2.php">Continue Shopping</a></p>
		</div>
	</div>


</body>
</html>