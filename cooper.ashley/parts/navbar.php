<?php 

include_once "lib/php/functions.php";


 ?>
 <input type="checkbox" id="menu" class="hidden">
<header class="navbar">
	<div class="container display-flex">
		<div class="flex-none">
			<h1>Water to Wine</h1>
		</div>
		<div class="flex-stretch"></div>
		<div class="flex-none menu-button">
			<label for="menu">&equiv;</label>
		</div>
		<nav class="nav nav-flex flex-none">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="product_list2.php">Wine Cellar</a></li>
				<li><a href="product_cart.php">
					<span>Cart</span>
					<span class="badge"><?= makeCartBadge(); ?></span>
				</a></li>
			</ul>
		</nav>
	</div>
</header>