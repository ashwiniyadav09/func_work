<?php
function ashwini(){
	$project = array(
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
	return $project;

}
    $data = ashwini();
    echo "<pre>";
	print_r($data);

	function nikki($department){

		$data1 = ashwini();
		foreach($data1 as $key=>$value){
			if($department == $value['department']){
				return $value['technology'];
			}
		}
	}
	$data2 = nikki('web');
	print_r($data2);
?>