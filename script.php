<?php
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
foreach($restaurants as $row => $innerArray){
    foreach($innerArray as $key => $value){
        if ($key == "Name"){
?>
            <h2><?= $value ?></h2>
<?php
        } elseif ($key == "Image"){
?>
            <img src=<?= $value ?> alt="Image"/>
<?php
        } else {
?>
            <p><?= $key ?> : <?= $value ?></p>
<?php
        }
    }
?>
    <hr>
<?php
}
?>
