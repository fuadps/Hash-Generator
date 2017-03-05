<?php

//type of hash store in array
$algohash = array("md4","md5","sha1");

//size of array
$size = sizeof($algohash);

echo "Enter String : ";

//user input the string
$input = trim(fgets(STDIN,1024));

//change string with different types of hash
if ($input != NULL) {
	for ($i = 0; $i < $size; $i++) {
		$result[$i] = hash($algohash[$i], $input);
	}
}

//display output using loops
for($i = 0;$i < $size; $i++) {
	echo $algohash[$i] ,"\t : ", $result[$i] ,"\n";
}
?>
