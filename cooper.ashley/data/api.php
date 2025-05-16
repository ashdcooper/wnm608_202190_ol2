<?php 

include_once "../lib/php/functions.php";


$output = [];


$data = json_decode(file_get_contents("php://input"));

// print_p($data);

switch ($data->type) {
	case "products_all":
		$output['result'] = makeQuery(makeConn(), "SELECT * 
			FROM `products` 
			ORDER BY `date_created` DESC 
			LIMIT 15");
		break;
	case "product_search":
	$search = $data->search;
		$output['result'] = makeQuery(makeConn(), "SELECT * 
			FROM `products` 
			WHERE 
				`name` LIKE '%$search%' OR
				`description` LIKE '%$search%' OR
				`category` LIKE '%$search%'
			ORDER BY `date_created` DESC 
			LIMIT 15");
		break;
	case "product_filter":
		$output['result'] = makeQuery(makeConn(), "SELECT * 
			FROM `products` 
			WHERE `$data->column` LIKE '$data->value'
			ORDER BY `date_created` DESC 
			LIMIT 15");
		break;
		case "product_sort":
		$output['result'] = makeQuery(makeConn(), "SELECT * 
			FROM `products`
			ORDER BY `$data->column` $data->dir
			LIMIT 15");
		break;
	default: $output['error'] = "No Valid Type";
}

echo json_encode($output,JSON_NUMBERIC_CHECk|JSON_UNESCAPED_UNICODE);