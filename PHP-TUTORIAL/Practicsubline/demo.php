<?php 
$a=1;
while($a<=10){
	 echo"$a*7=";
	echo $a*7;
	echo "<br>";
	$a++;
}
//increament 1 to 100
$a=1;
while($a<=10){
	echo $a.")one hundred<br>";
	$a++;
}

//decreament
$a=10;
while($a>=1){
	echo $a.")reverse <br>";
	$a--;
}


// increment 
for($i=1; $i<=10; $i++){
	echo $i.")Hello <br>";
}


//dresement
for($i=10; $i>=1; $i--){
	echo $i.")revese for <br>";
}

//table 
for($a=1; $a<=10; $a++){
	echo "$a*2=";
	echo $a*2;
	echo "<br>";
}

// mehtod2 
define('num',3);
for($a=1; $a<=10; $a++){
	echo $a*num;
	echo '<br>';
}

// write a program php where  $a=7 $b=3 how interchange value output a=3,b=7;
$a = 7;
$b = 3;

echo "Before swapping:<br>";
echo "a = $a, b = $b<br>";

$temp = $a;
$a = $b;
$b = $temp;
echo "After swapping:<br>";
echo "a = $a, b = $b";
// reverse array


?>