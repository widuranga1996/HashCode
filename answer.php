<?php
//get input
$file = file("~/input_data/a_an_example.in.txt");

$a = $file[0];

$b = count($file);
$e = [];
$f = [];

for($i=1; $i<$b; ){
	//to get first like ingrideients
	$c = $file[$i];
	// to get 1st character
	$d = trim(substr(strstr($c," "), 1));
	array_push($e,$d);
 $i+=2;
}

for($j=2; $j<$b; ){

	$g = $file[$j];
	$h = trim(substr(strstr($g," "), 1));	
	array_push($f,$h);
 
 $j+=2;
}

$k = implode(" ",$e);
$l = explode(" ",$k);

$m = implode(" ",$f);
$n = explode(" ",$m);

$a1 = array_filter($l);
$b1 = implode(" ",$a1);
$c1 = explode(" ",$b1);

$a2 = array_filter($n);
$b2 = implode(" ",$a2);
$c2 = explode(" ",$b2);

$result =[];

//remove duplicate values
$result = array_unique(array_diff($c1, $c2));

//get liked ingredients count
$likeCount = count($result);

//result convert to string
$resultS = implode(" ",$result);

//print result
echo $likeCount." ".$resultS;

?>

