<?php
function tech(){
$node = array();
$node['tech'][0]['departments']['dep-1']= 'web';
$node['tech'][0]['departments']['dep-2'] = 'ios';
$node['tech'][0]['departments']['dep-3'] = 'android';
$node['tech'][0]['departments']['dep-4'] = 'cit';
$node['tech'][0]['departments']['dep-5'] = 'designing';

$node['tech'][1]['departments']['dep-1']= 'web';
$node['tech'][1]['departments']['dep-2'] = 'ios';
$node['tech'][1]['departments']['dep-3'] = 'android';
$node['tech'][1]['departments']['dep-4'] = 'cit';
$node['tech'][1]['departments']['dep-5'] = 'designing';


$node['tech'][2]['departments']['dep-1']= 'web';
$node['tech'][2]['departments']['dep-2'] = 'ios';
$node['tech'][2]['departments']['dep-3'] = 'android';
$node['tech'][2]['departments']['dep-4'] = 'cit';
$node['tech'][2]['departments']['dep-5'] = 'designing';

return $node;
}

// $var1 = tech();
// echo "<pre>";
// print_r($var1);


function web(){
	$data = array();
	$data['web'][0]['name'] = 'ashwini';
	$data['web'][0]['age'] = '23';
	$data['web'][0]['city'] = 'gujrat';
	$data['web'][0]['tech'] = 'drupal';
	$data['web'][0]['company'] ='indianic';

	$data['web'][1]['name'] = 'kunal';
	$data['web'][1]['age'] = '23';
	$data['web'][1]['city'] = 'gujrat';
	$data['web'][1]['tech'] = 'drupal';
	$data['web'][1]['company'] ='indianic';

	$data['web'][2]['name'] = 'shruti';
	$data['web'][2]['age'] = '23';
	$data['web'][2]['city'] = 'gujrat';
	$data['web'][2]['tech'] = 'drupal';
	$data['web'][2]['company'] ='indianic';



	return $data;
}
 //    $var2 = web();
	// echo "<pre>";
	// print_r($var2);

	function android(){
		$team = array();
		$team['android'][0]['name'] = 'john';
		$team['android'][0]['age'] = '23';
		$team['android'][0]['city'] = 'mumbai';
		$team['android'][0]['tech'] = 'android';
		$team['android'][0]['company'] = 'indianic';

		$team['android'][1]['name'] = 'john';
		$team['android'][1]['age'] = '23';
		$team['android'][1]['city'] = 'mumbai';
		$team['android'][1]['tech'] = 'android';
		$team['android'][1]['company'] = 'indianic';

		$team['android'][2]['name'] = 'john';
		$team['android'][2]['age'] = '23';
		$team['android'][2]['city'] = 'mumbai';
		$team['android'][2]['tech'] = 'android';
		$team['android'][2]['company'] = 'indianic';


		return $team;
	}

	// $var3 = android();
	// echo "<pre>";
	// print_r($var3);

	function combine(){

		$var1 = web();
		$var2 = android();

		$tech = array();
		$tech['web'] = $var1;
		$tech['android'] = $var2;

		return $tech;
	}

	$var4 = combine();
	echo "<pre>";
	print_r($var4);

?>