

const listItemTemplate = templater(o=> `
<a class="col-xs-12 col-md-4" href="product_item.php?id=${o.id}" style="text-decoration: none; font-weight: initial;">
	<figure class="figure product display-flex flex-column">
		<div class="flex-stretch">
		<img src="../cooper.ashley/img/${o.thumbnail}" alt="${o.name}">
		</div>
		<figcaption class="productlist flex-none">
			<div>&dollar;${o.price}</div>
			<div>${o.name}</div>
		</figcaption>
	</figure>
</a>
`);