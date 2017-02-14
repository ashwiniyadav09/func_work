<?php
function cit(){
$csvtu = array();
$csvtu['college']= '';
$csvtu[0]['cit']['1 year']['name'] = 'ashwini';
$csvtu[0]['cit']['1 year']['age'] = '21';
$csvtu[0]['cit']['1 year']['stream'] = 'cs';
$csvtu[0]['cit']['1 year']['marks'] = '45';

$csvtu[0]['cit']['2 year']['name'] = 'manisha';
$csvtu[0]['cit']['2 year']['age'] = '21';
$csvtu[0]['cit']['2 year']['stream'] = 'cs';
$csvtu[0]['cit']['2 year']['marks'] = '45';

$csvtu[0]['cit']['3 year']['name'] = 'naziya';
$csvtu[0]['cit']['3 year']['age'] = '21';
$csvtu[0]['cit']['3 year']['stream'] = 'cs';
$csvtu[0]['cit']['3 year']['marks'] = '45';

return $csvtu;
}


// $var = cit();
// echo "<pre>";
// print_r($var);

function csit(){

$data = array();
$data['college']= '';
$data[1]['csit']['1 year']['name'] = 'ashwini';
$data[1]['csit']['1 year']['age'] = '21';
$data[1]['csit']['1 year']['stream'] = 'cs';
$data[1]['csit']['1 year']['marks'] = '45';

$data[1]['csit']['2 year']['name'] = 'manisha';
$data[1]['csit']['2 year']['age'] = '21';
$data[1]['csit']['2 year']['stream'] = 'cs';
$data[1]['csit']['2 year']['marks'] = '45';

$data[1]['csit']['3 year']['name'] = 'naziya';
$data[1]['csit']['3 year']['age'] = '21';
$data[1]['csit']['3 year']['stream'] = 'cs';
$data[1]['csit']['3 year']['marks'] = '45';

return $data;
}

// $var1 = csit();
// echo "<pre>";
// print_r($var1);

function shankara(){

$node = array();
$node['college']= '';
$node[2]['shankara']['1 year']['name'] = 'ashwini';
$node[2]['shankara']['1 year']['age'] = '21';
$node[2]['shankara']['1 year']['stream'] = 'cs';
$node[2]['shankara']['1 year']['marks'] = '45';

$node[2]['shankara']['2 year']['name'] = 'manisha';
$node[2]['shankara']['2 year']['age'] = '21';
$node[2]['shankara']['2 year']['stream'] = 'cs';
$node[2]['shankara']['2 year']['marks'] = '45';

$node[2]['shankara']['3 year']['name'] = 'naziya';
$node[2]['shankara']['3 year']['age'] = '21';
$node[2]['shankara']['3 year']['stream'] = 'cs';
$node[2]['shankara']['3 year']['marks'] = '45';

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
	$csvtu['cit'] = $var1;
	$csvtu['csit'] = $var2;
	$csvtu['shankara'] = $var3;

	return $csvtu;
}

$data = csvtu();
echo "<pre>";
print_r($data);



?>