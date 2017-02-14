<?php

function drupal(){
$drupal = array();
$drupal['name'][0] = 'kunal';
$drupal['name'][1] = 'ashwini';
$drupal['name'][2] = 'naziyaa';

return $drupal;
}
// $var = drupal();
// echo "<pre>";
// print_r($var); 




function magento(){

$magento = array();
$magento['name'][0] = 'manisha';
$magento['name'][1] = 'ayush';
$magento['name'][2] = 'nikki';

return $magento;

}

// $var1 = magento();
// echo "<pre>";
// print_r($var1);
 

function cms(){

	$var1=drupal();
	$var2=magento();

    $cms = array();

	$cms['drupal'] = $var1;
	$cms['magento'] = $var2;

	return $cms;
}

$data = cms();
echo "<pre>";
print_r($data);





?>