<?php 


function productListTemplate($r,$o) {
return $r.<<<HTML
<a class="col-xs-12 col-md-4" href="product_item.php?id=$o->id" style="text-decoration: none; font-weight: initial;">
	<figure class="figure product display-flex flex-column">
		<div class="flex-stretch"><img src="img/$o->thumbnail" alt="$o->name"></div>
		<figcaption class="productlist flex-none">
			<div>&dollar;$o->price</div>
			<div>$o->name</div>
		</figcaption>
	</figure>
</a>
HTML;
}


function selectAmount($amount=1,$total=10) {
	$output = "<select name='amount'>";
	for($i=1;$i<=$total;$i++) {
		$output .= "<option ".($i==$amount?"selected":"").">$i</option>";
	}
	$output .= "</select>";
	return $output;
}


function cartListTemplate($r,$o){
	$totalfixed = number_format($o->total,2,'.','');
	$selectamount = selectAmount($o->amount,10);
	$thumbnail = $o->thumbnail;
	return $r.<<<HTML
	<div class="display-flex" style="padding-bottom: 0.75em;">
		<div class="flex-none images-thumbs">
			<img src="img/$thumbnail">
		</div>
		<div class="flex-stretch" style="padding-left: 0.75em;">
			<strong>$o->name</strong>
			<form action="cart_actions.php?action=delete-cart-item" method="post">
				<input type="hidden" name="id" value="$o->id">
				<input type="submit" class="form-button inline" value="Delete" style="font-size:0.8em;text-align: center;">
			</form>
		</div>
		<div class="flex-none">
			<div>&dollar;$totalfixed</div>
			<form action="cart_actions.php?action=update-cart-item" method="post" onchange="this.submit()">
				<input type="hidden" name="id" value="$o->id">
				<div class="form-select" style="font-size:0.8em;">
					$selectamount
				</div>
			</form>
		</div>
	</div>
	HTML;
}


function cartTotals() {
	$cart = getCartItems();

	$cartprice = array_reduce($cart, function($r,$o){return $r + $o->total;},0);

	$pricefixed = number_format($cartprice,2,'.','');
	$taxfixed = number_format($cartprice*0.0825,2,'.','');
	$taxedfixed = number_format($cartprice*1.0825 + 9.99,2,'.','');

return <<<HTML
<div class="card-section display-flex">
	<div class="flex-stretch"><strong>Sub Total</strong></div>
	<div class="flex-none">&dollar;$pricefixed</div>
</div>
<div class="card-section display-flex">
	<div class="flex-stretch"><strong>Taxes</strong></div>
	<div class="flex-none">&dollar;$taxfixed</div>
</div>
<div class="card-section display-flex">
	<div class="flex-stretch"><strong>Shipping</strong></div>
	<div class="flex-none">&dollar;9.99</div>
</div>
<div class="card-section display-flex">
	<div class="flex-stretch"><strong>Total</strong></div>
	<div class="flex-none">&dollar;$taxedfixed</div>
</div>

HTML;
}


function recommendedProducts($a) {
	$products = array_reduce($a,'productListTemplate');
	echo <<<HTML
	<div class="grid gap productlist">$products</div>
	HTML;
}


function recommendedAnything($limit=3) {
	$result = makeQuery(makeConn(),"SELECT * FROM `products`  ORDER BY rand() DESC LIMIT $limit");

		recommendedProducts($result);

}

function recommendedCategory($cat,$limit=3) {
	$result = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `category`='$cat' ORDER BY `date_created` DESC LIMIT $limit");

		recommendedProducts($result);

}

function recommendedSimilar($cat,$id=0,$limit=3) {
	$result = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `category`='$cat' AND `id`<>$id ORDER BY rand() LIMIT $limit");

		recommendedProducts($result);

}




