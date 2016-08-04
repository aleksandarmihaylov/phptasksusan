<?php 
include("includes.php");
$sql = "SELECT product_id, length, width, height FROM product";
$result = $database->query($sql);
$normalProducts = array();
$bigProducts = array();
$sum = 0;
 
while($row = mysqli_fetch_array($result)){
	
	$productId = $row['product_id'];
	$volume = 5*$row['length']*$row['height']*$row['width']/1000000000;
	
	if($row['length'] > 3600 && $row['height'] > 3600 && $row['width'] > 3600){
		
		$bigItem = new Product($productId, $volume);
		$bigProducts[] = $bigItem;
	} else {
		
		$normalItem = new Product($productId, $volume);
		$normalProducts[] = $normalItem;
	}

}

?>
