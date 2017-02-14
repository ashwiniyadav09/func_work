<?php
function cit(){
$csvtu = array();
$csvtu['1 year'][0]['name'] = 'ashwini';
$csvtu['1 year'][0]['age'] = '21';
$csvtu['1 year'][0]['stream'] = 'cs';
$csvtu['1 year'][0]['marks'] = '45';

$csvtu['1 year'][1]['name'] = 'naziya';
$csvtu['1 year'][1]['age'] = '21';
$csvtu['1 year'][1]['stream'] = 'cs';
$csvtu['1 year'][1]['marks'] = '45';

$csvtu['2 year'][0]['name'] = 'manisha';
$csvtu['2 year'][0]['age'] = '21';
$csvtu['2 year'][0]['stream'] = 'cs';
$csvtu['2 year'][0]['marks'] = '45';

$csvtu['2 year'][1]['name'] = 'shruti';
$csvtu['2 year'][1]['age'] = '21';
$csvtu['2 year'][1]['stream'] = 'cs';
$csvtu['2 year'][1]['marks'] = '45';

$csvtu['3 year'][0]['name'] = 'kunal';
$csvtu['3 year'][0]['age'] = '21';
$csvtu['3 year'][0]['stream'] = 'cs';
$csvtu['3 year'][0]['marks'] = '45';

$csvtu['3 year'][1]['name'] = 'vidhi';
$csvtu['3 year'][1]['age'] = '21';
$csvtu['3 year'][1]['stream'] = 'cs';
$csvtu['3 year'][1]['marks'] = '45';

return $csvtu;
}


// $var = cit();
// echo "<pre>";
// print_r($var);

function csit(){

$data = array();

$data['1 year'][0]['name'] = 'ashwini';
$data['1 year'][0]['age'] = '21';
$data['1 year'][0]['stream'] = 'cs';
$data['1 year'][0]['marks'] = '45';

$data['1 year'][1]['name'] = 'ashwini';
$data['1 year'][1]['age'] = '21';
$data['1 year'][1]['stream'] = 'cs';
$data['1 year'][1]['marks'] = '45';

$data['2 year'][0]['name'] = 'manisha';
$data['2 year'][0]['age'] = '21';
$data['2 year'][0]['stream'] = 'cs';
$data['2 year'][0]['marks'] = '45';

$data['2 year'][1]['name'] = 'manisha';
$data['2 year'][1]['age'] = '21';
$data['2 year'][1]['stream'] = 'cs';
$data['2 year'][1]['marks'] = '45';

$data['3 year'][0]['name'] = 'naziya';
$data['3 year'][0]['age'] = '21';
$data['3 year'][0]['stream'] = 'cs';
$data['3 year'][0]['marks'] = '45';

$data['3 year'][1]['name'] = 'naziya';
$data['3 year'][1]['age'] = '21';
$data['3 year'][1]['stream'] = 'cs';
$data['3 year'][1]['marks'] = '45';

return $data;
}

// $var1 = csit();
// echo "<pre>";
// print_r($var1);

function shankara(){

$node = array();

$node['1 year']['name'] = 'ashwini';
$node['1 year']['age'] = '21';
$node['1 year']['stream'] = 'cs';
$node['1 year']['marks'] = '45';

$node['2 year']['name'] = 'manisha';
$node['2 year']['age'] = '21';
$node['2 year']['stream'] = 'cs';
$node['2 year']['marks'] = '45';

$node['3 year']['name'] = 'naziya';
$node['3 year']['age'] = '21';
$node['3 year']['stream'] = 'cs';
$node['3 year']['marks'] = '45';

return $node;
}
// $var2 = shankara();
// echo "<pre>";
// print_r($var2);

function csvtu(){

	$var1 = cit();
	$var2 = csit();
	$var3 = shankara();

	$csvtu = array();
	$csvtu['csvtu']['cit'] = $var1;
	$csvtu['csvtu']['csit'] = $var2;
	$csvtu['csvtu']['shankara'] = $var3;

	return $csvtu;
}

$data = csvtu();
echo "<pre>";
print_r($data);



?>