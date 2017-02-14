<?php
function code(){
	$assingment = array(
	  array(

	  	  "name" => "naziya",
          "department" => "web",
          "technology" => "drupal"

	  	),
	  array(

          "name" => "ashwini",
          "department" => "ios",
          "technology" => "firebase"

	  	)
	  );
	return $assingment;

}
// $var = code();
// echo "<pre>";
// print_r($var);

function web($technology){

		$data1 = code();
		print_r($data1);
		foreach($data1 as $key=>$value){
			if($technology == $value['technology']){
				return $value['name'];
         }
     }
}
$data2 = web('ashwini');
print_r($data2);

?>