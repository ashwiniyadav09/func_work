 <?php

function class10(){

$student = array();
$student[0]['name'] = 'kunal';
$student[0]['age'] = '30';
$student[0]['marks']='20';
$student[1]['name'] = 'ashwi';

$student[1]['age'] = '24';

$student[1]['marks']='30';

return $student;
}

// $var = class10();
// echo "<pre>";
// print_r($var);


function class11(){
$student = array();
$student[0]['name'] = 'kunal1';
$student[0]['age'] = '30';
$student[0]['marks']='20';
$student[1]['name'] = 'ashwi1';
$student[1]['age'] = '24';
$student[1]['marks']='30';

return $student;
}

// $var1 = class11();
// echo "<pre>";
// print_r($var1);


function class12(){
$student = array();
$student[0]['name'] = 'kunal2';

$student[0]['age'] = '30';

$student[0]['marks']='20';

$student[1]['name'] = 'ashwi2';
$student[1]['age'] = '24';
$student[1]['marks']='30';

return $student;

}

// $var2 = class12();
// echo "<pre>";
// print_r($var2);


function info(){
	$data1 = class10();
	$data2 = class11();
	$data3 = class12();

	$info = array();
	$info['class10'] = $data1;
	$info['class11'] = $data2;
	$info['class12'] = $data3;

	return $info;
}

$var3 = info();
echo "<pre>";
print_r($var3);
?>