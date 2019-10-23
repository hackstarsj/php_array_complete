<?php
echo "<br>===================================One D Array==================================<br>";
//one d array
$array=array(1,2,3,4,5,6,7,8,9,10);
//accessing array element;
echo $array[0]."<br>";
echo $array[1]."<br>";
echo $array[2]."<br>";
echo $array[3]."<br>";

//print all elements of array
//using four loop
//count is a function which give size of array

echo "<br>==================Printing All Array Element Using For===========================<br>";
for($i=0;$i<count($array);$i++){
	echo "".$array[$i]."<br>";
}


echo "<br>===================Printing All Element Using Foreach loop======================<br>";
//printing all element using foreach loop
foreach($array as $value){
	echo $value."<br>";
}


echo "<br>===========================Push Extra Item in Array to end of array=============================<br>";
//lets add element in array
array_push($array,"11");


echo "<br>========================After Pushing Element in Array to End of Array==========================<br>";
foreach($array as $data){
	echo "".$data."<br>";
}


echo "<br>====================Pushing Extra Item to Top of Array Element=================================<br>";
array_unshift($array,"0");

echo "<br>===================After Pushing Item to Top of Array=========================================<br>";
foreach($array as $data){
	echo $data."<br>";
}

echo "<br>=====================Removing an Item to Bottom of Array======================================<br>";
array_pop($array);


echo "<br>===================After Removing Print Array===================================================<br>";
foreach($array as $data){
	echo $data."<br>";
}

echo "<br>=================Remove an Item to Top of Array=============================================<br>";
array_shift($array);

foreach($array as $data){
	echo $data."<br>";
}


echo "<br>===============PHP Sort Array==========================================<br>";
$array_2=array(5,7,8,1,2,6,5,4);

echo "<br>==============Sort Array in Ascending Order===========================<br>";
sort($array_2);
foreach($array_2 as $a2){
	echo $a2."<br>";
}

echo "<br>============Sort Array in Descending Order==============================<br>";
rsort($array_2);
foreach($array_2 as $data){
	echo $data."<br>";
}



echo "<br>=================Associate Array================================<br>";

$ass_array=array("key_2"=>"value 1","key_1"=>"value 2","key_3"=>"value 3");

foreach($ass_array as $key=>$value){
	echo "Key : ".$key." Value : ".$value."<br>";
}

echo "<br>================Sort assoc array according to key=============================<br>";
ksort($ass_array);

foreach($ass_array as $key=>$value){
	echo "KEY : ".$key." Value : ".$value."<br>";
}

echo "<br>=================Sort assoc array according to Value =====================<br>";

asort($ass_array);

foreach($ass_array as $key=>$value)
{
	echo "KEY : ".$key." Value : ".$value."<br>";
}


echo "<br>==================Accessing Associative array by Key================<br>";

echo $ass_array['key_3'];


echo "<br>=================Checking variable is array===================<br>";

$a=array("1","2");
$b="hello";

if(is_array($a)){
	 echo "<br>A is array<br>";
}
else{
	echo "<br>A is not Array<br>";
}

if(is_array($b)){
	echo "<br>B is Array<br>";
}
else{
	echo "<br>B is not Array<br>";
}

echo "<br>======================PHP 2D Array===========================<br>";

$array_2d=array(array(1,2,3),array(4,5,6),array(7,8,9));

echo "<table border='1'>";
foreach($array_2d as $d){
	echo "<tr>";
	foreach($d as $d1){
		echo "<td>".$d1."</td>";

	}
	echo "</tr>";
}
echo "</table>";


echo "<br>============PHP Global Variable======================<br>";

//this is array variable for request data
print_r($_REQUEST);
echo "<br>";
print_r($_GET);
echo "<br>";
//this work only on post method
print_r($_POST);
echo "<br>";


print_r($_SERVER);
