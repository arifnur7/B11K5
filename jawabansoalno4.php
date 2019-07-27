<?php

function countvocal($word){
	$arr = str_split($word);
	$vocal=['a','i','u','e','o'];
	$found = array_intersect($vocal,$arr);
	$count = array_count_values($arr);
	$result=0;
	foreach ($found as $item){
		$result=$result+1;
	}
	
	return $result;
}

$word="programming";
echo "Jumlah Huruf vokal dari '".$word."'";
echo "<br/>adalah ".countvocal($word);
?>