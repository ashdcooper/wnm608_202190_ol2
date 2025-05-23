<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><html lang="en">
<head>
	<meta charset="UTF-8">
	<title>About</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	
	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<div class="card soft">
			<div style="margin-top: 1.5em;">
			<img src="img/home-banner.png" alt="Wine Collection Banner" style="width:100%; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.15);">

			<p>Welcome to Water to Wine Cellar — a curated collection of spiritually inspired wines crafted to honor timeless stories and sacred moments. Whether you're celebrating communion, hosting a gathering, or simply enjoying a quiet evening, our wines are designed to reflect reverence and richness in every pour. Explore our handcrafted selections and experience a taste rooted in faith, tradition, and excellence.</p>
			
			<div style="margin-top: 2em; text-align: center;">
			<a href="product_list2.php" class="form-button" style="padding: 0.75em 1.5em; background-color: #800000; color: white; font-weight: bold; text-decoration: none; border-radius: 5px; box-shadow: 0 4px 8px rgba(0,0,0,0.2); transition: background-color 0.3s;">
				Shop the Wine Cellar
			</a>
</div>

</div>

		</div>
	</div>
	<div class="container">
		<div class="card soft">
			<h2>Recommended Red</h2>
			<?php

			recommendedCategory("red");
			?>
	
		</div>
		<div class="card soft">
			<h2>Recommended White</h2>
			<?php

			recommendedCategory("white");
			?>
	
		</div>
		<div class="card soft">
			<h2>Recommended Other</h2>
			<?php

			recommendedCategory("rose");
			?>
	
		</div>
	</div>

</body>
</html>










