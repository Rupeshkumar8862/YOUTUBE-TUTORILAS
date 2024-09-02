<?php 
$arrayindex = array("cut","dog",43.4,"hello" );
echo $arrayindex['0'].'<br>';
echo $arrayindex[1].'<br>';
echo $arrayindex[2].'<br>';
echo $arrayindex[3].'<br>';
echo '<pre>';
print_r($arrayindex);
echo '</pre>';
//for loop
for($a=0; $a<=3; $a++){
	echo $arrayindex[$a].'<br>';
}
//while loop
$a=0;
while($a<=3){
	echo $arrayindex[$a].'<br>';
	$a++;
}
// do while loop
/*  syntax  value ins  2. staten incr/decre 3.condition in last
$i = 1;   
do {
  echo $i;
  $i++;
} while ($i < 6);          */

$a=0;
do{
	echo $arrayindex[$a].'<br>';
	$a++;

}while($a<=3);


// foreach
// foreach($arrayindex as $value){
// 	echo $value.'<br>';
// }
//foreach table
echo '<table border="3px">';
echo'<caption>DATA </caption>'; echo '<tr>
<th>0</th>
<th>1</th>
<th>2</th>
<th>3</th>
</tr>';
echo '<tr>';
foreach($arrayindex as $value){
	 echo '<td>'.$value.'</td>';
} 
echo '</tr>';
echo '</table>';
//using count 
$fruits = array("apple", "banana", "orange", "grape");

$count = count($fruits);

echo "The length of the array is ". $count;

// exp
$fruits = array("apple", "banana", "orange", "grape");

// for ($i = 0; $i < count($fruits); $i++) {
//   echo $fruits[$i] . "<br>";
// }
//expl
// Using a for loop to traverse the array
// for ($i = 0; $i < count($fruits); $i++) {
//   echo $fruits[$i] . "<br>";
// }

// Using a foreach loop to traverse the array
foreach ($fruits as $fruit) {
  echo  $fruit. "<br>";
}




?>