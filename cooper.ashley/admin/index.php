<?php 
session_start();
include "../lib/php/functions.php";


$empty_product = (object)[
	"name"=>"New Testament Red",
	"category"=>"Red",
	"description"=>"The blood of Jesus",
	"volume_ml"=>"",
	"alcohol_percent"=>"",
	"price"=>"44.99",
	"stock_quantity"=>"200",
	"origin_region"=>"",
	"vintage_year"=>"",
	"thumbnail"=>"new_testament_red.png"
];





// Logic
try {
	$conn = makePDOConn();
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	switch($_GET['action']) {
		case "update":
			$id = intval($_GET['id']);
			$price = floatval($_POST['product-price']);
			$quantity = intval($_POST['product-quantity']);
			$statement = $conn->prepare("UPDATE
				`products`
				SET
					`last_saved` = NOW(),
					`name`=?,
					`price`=?,
					`stock_quantity`=?,
					`category`=?,
					`description`=?,
					`thumbnail`=?,
					`date_modify`=NOW()
				WHERE `id`=?
				");

			$statement->execute([
				$_POST['product-name'],
				$price,
				$quantity,
				$_POST['product-category'],
				$_POST['product-description'],
				$_POST['product-thumbnail'],
				$id
			]);

			$_SESSION['flash_message'] = "✅ Product updated successfully!";
			header("Location: {$_SERVER['PHP_SELF']}?id=$id");
			exit;
			header ("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
			break;
		case "create":
			$id = intval($_GET['id']);
			$price = floatval($_POST['product-price']);
			$quantity = intval($_POST['product-quantity']);
			$statement = $conn->prepare("INSERT INTO
				`products`
				(
				`last_saved`,
				`name`,
				`price`,
				`stock_quantity`,
				`category`,
				`description`,
				`thumbnail`,
				`date_created`,
				`date_modify`
				)
				VALUES (NOW(),?,?,?,?,?,?,NOW(),NOW())
				");

			$statement->execute([
				$_POST['product-name'],
				$price,
				$quantity,
				$_POST['product-category'],
				$_POST['product-description'],
				$_POST['product-thumbnail'],
			]);
			$id = $conn->lastInsertId();

			$_SESSION['flash_message'] = "✅ Product created successfully!";
			header("Location: {$_SERVER['PHP_SELF']}?id=$id");
			exit;
			header("location:{$_SERVER['PHP_SELF']}?id=$id");
			break;
		case "delete":
			$id = intval($_GET['id']);
			$statement = $conn->prepare("DELETE FROM `products` WHERE id=?");
			$statement->execute([$id]);
			$_SESSION['flash_message'] = "✅ Product deleted successfully!";
			header("Location: {$_SERVER['PHP_SELF']}");
			exit;
			header ("location:{$_SERVER['PHP_SELF']}");
			break;
	}
} 	catch (PDOException $e) {
 	die($e->getMessage());
 }
	






// Templates
function productListItem($r,$o) {
return $r.<<<HTML
<div class="card soft">
	<div class="display-flex">
		<div class="flex-none images-thumbs"><img src='../cooper.ashley/img/$o->thumbnail'></div>
		<div class="flex-stretch" style="padding:1em;">$o->name</div>
		<div class="flex-none"><a href="{$_SERVER['PHP_SELF']}?id=$o->id" class="form-button">Edit</a></div>
	</div>
</div>
HTML;
}



function showProductPage($o) {

$id = $_GET['id'];
$addoredit = $id == "new" ? "Add" : "Edit";
$createorupdate = $id == "new" ? "create" : "update";
$images = array_reduce(explode(",", $o->thumbnail),function($r,$o){return $r."<img src='../img/$o'>";});



$display = <<<HTML
<div>
	<h2>$o->name</h2>
	<div class="form-control">
		<label class="form-label">Price</label>
		<span>&dollar;$o->price</span>
	</div>
	<div class="form-control">
		<label class="form-label">Quantity</label>
		<span>$o->stock_quantity</span>
	</div>
	<div class="form-control">
		<label class="form-label">Category</label>
		<span>$o->category</span>
	</div>
	<div class="form-control">
		<label class="form-label">Description</label>
		<span>$o->description</span>
	</div>
	<div class="form-control">
		<label class="form-label">Thumbnail</label>
		<span><img src='../cooper.ashley/img/$o->thumbnail'></span>
	</div>
</div>	
HTML;

$form = <<<HTML
<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
	<h2>$addoredit Product</h2>
	<div class="form-control">
		<label class="form-label" for="product-name">Name</label>
		<input class="form-input" type="text" name="product-name" id="product-name" value="$o->name" placeholder="Enter the Product Name">
	</div>
	<div class="form-control">
		<label class="form-label" for="product-price">Price</label>
		<input class="form-input" type="Number" name="product-price" id="product-price" min="0" max="1000" step="0.01" value="$o->price" placeholder="Enter the Product Price">
	</div>
	<div class="form-control">
		<label class="form-label" for="product-quantity">Quantity</label>
		<input class="form-input" type="Number" name="product-quantity" id="product-quantity" min="0" max="1000" step="1" value="$o->stock_quantity" placeholder="Enter the Product Quantity">
	</div>
	<div class="form-control">
		<label class="form-label" for="product-category">Category</label>
		<input class="form-input" type="text" name="product-category" id="product-category" value="$o->category" placeholder="Enter the Product Category">
	</div>
	<div class="form-control">
		<label class="form-label" for="product-description">Description</label>
		<textarea class="form-input" name="product-description" id="product-description" placeholder="Enter the Product Description">$o->description</textarea>
	</div>
	<div class="form-control">
		<label class="form-label" for="product-thumbnail">Thumbnail</label>
		<input class="form-input" type="text" name="product-thumbnail" id="product-thumbnail" value="$o->thumbnail" placeholder="Enter the Product Thumbnail">
	</div>
	<div class="form-control">
		<input class="form-button" type="submit"  value="Save Changes">
	</div>
</form>
HTML;

$output = $id == "new" ? "<div class='card soft left'>$form</div>" :
"<div class='grid gap'>
	<div class='col-xs-12 col-md-7'><div class='card soft'>$display</div></div>
	<div class='col-xs-12 col-md-5'><div class='card soft'>$form</div></div>
</div>
";

$delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";


echo <<<HTML
<div class="card soft left">
	<nav class="display-flex">
		<div class="flex-stretch"><a href="{$_SERVER['PHP_SELF']}">Back</a></div>
		<div class="flex-none">$delete</div>
	</nav>
</div>
$output
HTML;
}





?><!DOCTYPE html>
 <html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Admin Page</title>

	<?php include "../parts/meta.php"; ?>
</head>
<body>
	
	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>Product Admin</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>">Product List</a></li>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container">
			<?php if(isset($_SESSION['flash_message'])): ?>
				<div class="form-control success" style="background-color:#d4edda; color:#155724; padding:1em; margin-bottom:1em;">
					<?= $_SESSION['flash_message'] ?>
				</div>
				<?php unset($_SESSION['flash_message']); ?>
			<?php endif; ?>


			<?php 
			if(isset($_GET['id'])) {
				showProductPage(
					$_GET['id']=="new" ?
					$empty_product :
					makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0]
				);
				
			} else {


			 ?>
			<h2>Product List</h2>
					
	
			<?php 
		
			$result = makeQuery(makeConn(),"SELECT * FROM `products` ORDER BY `date_created` DESC");

			echo array_reduce($result, 'productListItem');

			}	

			?>
				

	</div>

	<script>
	document.addEventListener("DOMContentLoaded", function() {
		const flashMessage = document.querySelector('.form-control.success');
		if(flashMessage) {
			setTimeout(() => {
				flashMessage.style.transition = "opacity 0.5s";
				flashMessage.style.opacity = 0;
				setTimeout(() => flashMessage.style.display = "none", 500);
			}, 3000);
		}
	});
</script>

</body>