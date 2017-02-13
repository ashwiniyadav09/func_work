<?php
function drupal(){
	$banner = array(
	  array(

	  	  "name" => "naziya",
          "marks" => 23,
          "description" => "jdhfjkfh"

	  	),
	  array(

          "name" => "ashwini",
          "marks" => 45,
          "description" => "jdhfjkfh"

	  	)
	  );
	  return $banner;
	  
}
// $var = drupal();
// echo "<pre>";
// print_r($var);

function web($name){
	$var1 = drupal();
	foreach($var1 as $key=> $value){
		if ($name==$value['name']){
			return $value['marks'];
		}
	} 
}
$var2 = web('ashwini');
  print_r($var2);

?>
