<?php
 function drupal(){
 	$tech = array();
 	$tech[0]['emp_name'] = 'naziyaa';
 	$tech[0]['age'] = '25';
 	$tech[0]['department'] = 'web';

 	$tech[1]['emp_name'] = 'ashwini';
 	$tech[1]['age'] = '23';
 	$tech[1]['department'] = 'web';



 	return $tech;
 }
 
 // $var1 = drupal();
 // echo "<pre>";
 // print_r($var1); 

function wordpress(){
	$node = array();
		$node[0]['emp_name'] = 'john';
		$node[0]['age'] = '43';
		$node[0]['department'] = 'web';

		$node[1]['emp_name'] = 'harry';
		$node[1]['age'] = '34';
		$node[1]['department'] = 'web';

		return $node;
	}
	// $var2 = wordpress();
 //    echo "<pre>";
 //    print_r($var2);

    function tech(){
    	$var1 = drupal();
    	$var2 = wordpress();

    	$tech = array();
    	$tech['web']['drupal'] = $var1;
    	$tech['web']['wordpress'] = $var2;

    	return $tech;
    }

    $data = tech();
    echo "<pre>";
    print_r($data);

?>