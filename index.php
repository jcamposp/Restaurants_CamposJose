<!DOCTYPE html>
<html>
	<head>
		<title>Restaurants</title>
		<meta charset="UTF-8"/>
		
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"/>
		
		<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css"/> <!-- CSS -->
	
	</head>
	<body>
		<div class="contenedor">
			<header>
				<div class="mainTop">
					<img class="logo" src="images/logo.png"/>
					<div class="navBar">
						<ul>
							<li><a href="index.php">Index</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Contact</a></li>
							<li><a href="#">Blog</a></li>
						</ul>
					</div>
				</div>
			</header>
		</div>

	<?php 
	# ARRAY DECLARATION & FUNCTION DECLARATION
	# ARRAY DECLARATION -- Name, Locality, Route, StreetNumber, PostalCode, PhoneNumber, Photography
	
	# FUNCTION DECLARATION 
	function getRestaurants(){
		
		$restaurants = array();
			$restaurants[]= array("Name"=>"Norice Palma","Locality"=>"Palma","Route"=>"Plaça de Sant Antoni","Street number"=>"17","Postal code"=>"07002","Phone number"=>"+34871115308","Image"=>"'https://media-cdn.tripadvisor.com/media/photo-l/12/f6/4e/01/ceviche-con-dorada-estilo.jpg'");
			$restaurants[]= array("Name"=>"Millo Cocina Mestiza","Locality"=>"Palma","Route"=>"St. Caro","Street number"=>"30","Postal code"=>"07013","Phone number"=>"+34871040413","Image"=>"'https://media-cdn.tripadvisor.com/media/photo-l/0f/6a/6b/21/millo-cocina-mestiza.jpg'");
			$restaurants[]= array("Name"=>"La Nueva Burguesa","Locality"=>"Palma","Route"=>"St. Sant Magi","Street number"=>"76","Postal code"=>"07013","Phone number"=>"+34871509530","Image"=>"'https://media-cdn.tripadvisor.com/media/photo-l/11/9e/8b/83/tim.jpg'");
			$restaurants[]= array("Name"=>"Sa Vida Palma","Locality"=>"Palma","Route"=>"St. Industria","Street number"=>"8","Postal code"=>"07013","Phone number"=>"+34971075057","Image"=>"'https://media-cdn.tripadvisor.com/media/photo-l/13/11/db/45/sa-vida-palma.jpg'");
			$restaurants[]= array("Name"=>"Taller de Mar","Locality"=>"Palma","Route"=>"St. Cotoner","Street number"=>"54","Postal code"=>"07013","Phone number"=>"+34971289375","Image"=>"'https://media-cdn.tripadvisor.com/media/photo-l/10/3b/56/bc/taller-de-mar.jpg'");
			$restaurants[]= array("Name"=>"Daikiya","Locality"=>"Palma","Route"=>"St. Jaume Balmes", "Street number"=>"63","Postal code"=>"07004","Phone number"=>"+34871708557","Image"=>"'https://media-cdn.tripadvisor.com/media/photo-l/0f/98/e2/cd/aburi-uramaki.jpg'");
			$restaurants[]= array("Name"=>"Le Bistro Bleu Palma","Locality"=>"Palma","Route"=>"St. San Magi","Street number"=>"68","Postal code"=>"07013","Phone number"=>"+34871774681","Image"=>"'https://media-cdn.tripadvisor.com/media/photo-l/11/05/3d/b7/numero-68-in-san-magi.jpg'");
			$restaurants[]= array("Name"=>"Mas39","Locality"=>"Palma","Route"=>"St. La Fabrica","Street number"=>"Corner Av. Argentina","Postal code"=>"07013","Phone number"=>"+34871044623","Image"=>"'https://media-cdn.tripadvisor.com/media/photo-l/13/78/21/33/photo1jpg.jpg'");
			$restaurants[]= array("Name"=>"Agra Tandoori Indian Restaurant","Locality"=>"Palma","Route"=>"Av. Grabriel Roca","Street number"=>"23","Postal code"=>"07014","Phone number"=>"+34971101504","Image"=>"'https://media-cdn.tripadvisor.com/media/photo-l/15/7b/4a/0b/nueva-fachada.jpg'");
			$restaurants[]= array("Name"=>"BROX Kitchen & Drinks","Locality"=>"Palma","Route"=>"Av. Argentina","Street number"=>"25","Postal code"=>"07013","Phone number"=>"+34971106676","Image"=>"'https://media-cdn.tripadvisor.com/media/photo-f/12/5f/8a/bb/hamburguesas-gourmet.jpg'");
	
		return $restaurants;
	}
	$restaurants = getRestaurants();
	
	?>
		<div id="mainContent"> <!-- MAIN CONTENT STARTS -->
			<div class="row"> <!-- ROW STARTS -->

	

	<!-- PHP STARTS -->
	<!-- PHP STRUCTURE
	FOREACH#1 LOOP
		FOREACH#2 LOOP
			IF#1 FUNCTION
			END IF#1 
		END FOREACH#2 
	END FOREACH#1 
		
	-->
	
	<?php
	# We run over the array $restaurants, but we get only the arrays not the values into each one. We build one bootstrap card for each row
		foreach ($restaurants as $row => $innerArray) {
	?>
		
				<div class="card col-sm-7 col-md-5 col-lg-2 mx-2 my-3"> <!-- CARD STARTS -->

	<?php
	# We need another foreach function to run over the values of each innerArray in $restaurants
		foreach ($innerArray as $innerKey => $value) {
			if ($innerKey == "Image") { # IF $innerKey == "Image", we use the HTML <img> tag
	?>
					<img class="img-fluid rounded mb-3 mb-md-xs-0" src=<?= $value ?> alt="Card image"/>
	<?php
			} elseif ($innerKey == "Name") { # IF $innerKey == "Name", we use the HTML <h3> tag
	?>
					<h3 class="card-title text-center"><?= $value ?></h3>
					<hr>
	<?php
			} else { # For others $innerKey values (Route, Street number, Postal code, etc.), we use the HTML <p> tag
	?>
					<p class="card-text"><b><?= $innerKey ?>:</b> <?= $value ?></p>
	<?php
			}
		}
	?>
				</div> <!-- CARD ENDS -->
		
				<hr>
	<?php
	}
	?>
			</div> <!-- ROW ENDS -->

		</div> <!-- MAIN CONTENT ENDS -->
				
		<footer> <!-- FOOTER STARTS -->
			<div>
				<small>&copy; All rights reserved | IES Francesc de Borja Moll 2018</small>
				<ul>
					<li><a href="https://github.com/jcamposp" id="ghub" target="_blank"></a></li>
					<li><a href="#" id="twitter"></a></li>
					<li><a href="#" id="facebook"></a></li>
					<li><a href="#" id="pinterest"></a></li>
				</ul>
			</div>
		</footer> <!-- FOOTER ENDS -->
	</body>
</html>
