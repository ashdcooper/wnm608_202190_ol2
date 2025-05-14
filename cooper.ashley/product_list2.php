<?php 


include_once "lib/php/functions.php";
include_once "parts/templates.php";



 ?><html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Wine Cellar</title>

	<?php include "parts/meta.php"; ?>

</head>
<body>

	
	<?php include "parts/navbar.php"; ?>

	<div class="container">
			<h2>Wine Cellar Selection</h2>


			<?php


			$result = makeQuery(
				makeConn(),
				"
				SELECT *
				FROM `products`
				ORDER BY `price` DESC
				LIMIT 15
				"
			);


			echo "<div class='grid gap'>", array_reduce($result, 'productListTemplate'), "</div>";


			?>


		</div>
	</div>


</body>
</html>