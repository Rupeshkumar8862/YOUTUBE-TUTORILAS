<?php 

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
// To access an array item you can refer to the key name.
// echo $car["model"];
// To change the value of an array item, use the key name:
// $car["year"] = 2024;

// foreach ($car as $key => $value) {
// 	echo $key. '='.$value.'<br>';
// } 

 //  table 
    echo '<table border="2px" cellpadding="4px" cellspacing="4px" width="80%">';
    echo '<tr>';
foreach ($car as $key => $value) {
    echo  '<td>'.$value.'</td>>';
} 
echo '<tr>';
echo '</table>';
//resverse
$a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
print_r(array_reverse($a));
//recuring
// Replace the values of the first array with the values from the second array recursivel
$a1=array("a"=>array("red"),"b"=>array("green","blue"),);
$a2=array("a"=>array("yellow"),"b"=>array("black"));
print_r(array_replace_recursive($a1,$a2)
?>
