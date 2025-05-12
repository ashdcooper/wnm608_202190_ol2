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



function cartListTemplate($r,$o){
	return $r.<<<HTML
	<div class="display-flex" style="padding-bottom: 0.75em;">
		<div class="flex-none images-thumbs">
			<img src="../img/<?= $product->thumbnail ?>" alt="">
		</div>
		<div class="flex-stretch" style="padding-left: 0.75em;">
			<strong>$o->name</strong>
			<div>Delete</div>
		</div>
		<div class="flex-none">
			&dollar;$o->price
		</div>
	</div>
	HTML;
}