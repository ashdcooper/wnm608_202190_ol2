<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Notes</title>
</head>
<body>
	<?php 
	echo "<div>Hello Tech World</div>"; 


	//Variables

	$a = 5;

	echo Sa;


	//String Interpolation - double quotes make it work, must be a double quote string
	//''-simple string (not smart)
	echo "<div> I have $a things </div>";
	echo '<div> I have $a things </div>';

	// Basic Value Types

	// 1. Number
	// a. Integar - Whole number
	$b = 15;
	// b. Float - floating point number
	$b = 0.483;

	$b = 10;


	// 2. String - always has ""
	$name = "Emmanuel"

	// 3. Boolean
	$isOn = true;


	//Math and OoO (Order of Operation - PEMDAS)

	echo 5 + 4 - 2;

	//Concatenation - adding strings together
	// "." used to add strings together

	echo "<div>b + a" . " = c</div>";
	echo "<div>$b + $a = ".($a+$b)."</div>";


	?>


	<hr>
	<div>This is my name</div>
	<div>

		<?php

		$firstname = "Ashley";
		$lastname = "Cooper";
		$fullname = "$firstname $lastname"

		echo $fullname;

		?>
	<hr>
	<?php 


	// Superglobal - predefined to give access to higher values
	// ?name=Ashley
	echo "<a href='?name=Ashley'>visit</a>";
	echo $_GET['name'];
	echo "<div>My name is {$_GET['name']}</div>";


	// ?name=Ashley&type=textarea
	echo "<a href='?name=Ashley&type=textarea'>visit</a>";
	echo "<{$_GET['type']}>My name is {$_GET['name']}</{$_GET['type']}>";




	 ?>

	 <hr>
	 <?php

	 //Array
	 $colors = array("red", "green", "blue");

	 echo $colors[0];

	 echo "
	 <br>$colors[0]
	 <br>$colors[1]
	 <br>$colors[2]
	 ";

	 echo count($colors);


	 ?>

	 <div style="color:<?= $colors[1] ?>;">
	 	This text is green
	 </div>


	 <hr>
	 <?php 

	 //Associative Array
	 $colorsAssociative = [
	 	"red" => "#f00",
	 	"green" => "#0f0",
	 	"blue" => "#00f"

	 ];

	 echo $colorsAssociative['green'];

	  ?>


	<hr>
	<?php 

	//Casting
	$c = "$a";
	$d = $c*1;


	$colorsObject = (object)$colorsAssociative;

	echo $colorsObject;

	// echo $colorsObject;

	echo "<hr>";

	//Array Index Notation
	echo $colors[0]."<br>";
	echo $colorsAssociative['red']."<br>";
	echo $colorsAssociative[$colors[0]]."<br>";

	//Object Property Notation
	echo $colorsObject ->red."<br>";
	echo $colorsObject ->{$colors[0]}."<br>";


	 ?>

	 <hr>

	 <?php 

	 print_r($colors);
	 echo "<hr>";
	 print_r($colorsAssociative);
	 echo "<hr>";
	 echo "<pre>",print_r($colorsObject),"</pre>";


	 //Function

	 function print_p($v) {
	 	echo "<pre>",print_r($v),"</pre>";
	 }

	 print_r($_GET);



	  ?>
	</div>
</body>
</html>