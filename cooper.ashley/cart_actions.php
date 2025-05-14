<?php 

include_once "lib/php/functions.php";


if(!isset($_SESSION['cart'])) $_SESSION['cart'] = [];
	switch($_GET['action']) {
		case "add-to-cart":
			$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_POST['product_id'])[0];
			addToCart($_POST['product_id'], $_POST['product_amount']);
			header ("location:product_add_to_cart.php?id={$_POST['product_id']}");
			break;
		case "update-cart-item":
			$p = cartItemById($_POST['id']);
			$p->amount = $_POST['amount'];
			header("location:product_cart.php");
			break;
		case "delete-cart-item":
			$_SESSION['cart'] = array_filter($_SESSION['cart'],function($o){return $o->id!=$_POST['id'];});
			header ("location:product_cart.php");
			break;
		case "reset-cart":
			resetCart();
			break;
		default:
			die("Incorrect Action");
	}

print_p([$_GET,$_POST,$_SESSION]);