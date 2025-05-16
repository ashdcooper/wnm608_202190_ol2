<?php 


include_once "lib/php/functions.php";
include_once "parts/templates.php";



 ?><html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Wine Cellar</title>

	<?php include "parts/meta.php"; ?>

	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>


</head>
<body>

	
	<?php include "parts/navbar.php"; ?>

	<div class="container">
			<h2>Wine Cellar Selection</h2>

			<div class="form-control">
				<form class="hotdog light" id="product-search">
					<input type="search" placeholder="Search Products" style="display: inline-block;
    background-color: var(--color-white);
    border-width: 0;
    border-radius: 1em;
    font-size: inherit;
    color: inherit;
    width: 100%;
    padding: 0.5em 1em;
    outline: 0;">
				</form>
			</div>
			<div class="form-control">
				<div class="card soft">
					<div class="display-flex">
						<div class="flex-stretch display-flex">
							<div class="flex-none">
								<button data-filter="category" data-value="" type="button" class="form-button">All</button>
							</div>
							<div class="flex-none">
								<button data-filter="category" data-value="Red" type="button" class="form-button">Red</button>
							</div>
							<div class="flex-none">
								<button data-filter="category" data-value="Red Blend" type="button" class="form-button">Red Blend</button>
							</div>
							<div class="flex-none">
								<button data-filter="category" data-value="Rose" type="button" class="form-button">Rose</button>
							</div>
							<div class="flex-none">
								<button data-filter="category" data-value="Amber" type="button" class="form-button">Amber</button>
							</div>
							<div class="flex-none">
								<button data-filter="category" data-value="White" type="button" class="form-button">White</button>
							</div>
						</div>
						<div class="flex-none">
							<div class="form-select">
								<select class="js-sort">
									<option value="1">Newest</option>
									<option value="2">Oldest</option>
									<option value="3">Price Lowest</option>
									<option value="4">Price Highest</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class='productlist grid gap'></div>


		</div>
	</div>


</body>
</html>