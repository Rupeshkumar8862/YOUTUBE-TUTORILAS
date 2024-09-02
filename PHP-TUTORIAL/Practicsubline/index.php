

<?php 
  /*print the value when $a=1; then condition $a<100 */
  // $a=1;
  // while($a<20){
  // 	echo $a.")print 1 to 10 <br>";
  // 	$a++;
  // }


 /*print the value when $a=1; then condition $a>100 */
// $b=100;
// while($b>1){
// 	echo $b.")<b> reverse print</b> <br>";
// 	$b--;
// }


// $a=10;
// while($a >=1){
// 	echo $a.") print resvers<br>";
// 	$a--;
// }
 /*2 ka table  */
// $a=1;
// while($a<=10){
// 	echo "2*$a=";
// 	echo $a*2;
// 	echo "<br>";
// 	$a++;
// }
 //3 ka table 
// $a=1;
// while($a<=10){
// 	echo "3*$a=";
// 	echo $a*3;
// 	echo "<br>";
// 	$a++;
// }

 //4ka table
// $a=1;
// while($a<=10){
// 	echo "4*$a=";
// 	echo $a*4;
// 	echo "<br>";
// 	$a++;
// }

 //10 ka table
// $i = 0;
// while ($i < 100) {
//   $i+=10;
//    echo $i ."<br>";
// }

 //11 ka table
// $i = 0;
// while ($i < 110) {
//   $i+=11;
//    echo $i ."<br>";
// }

//12 ka table
// $a=1;
// while($a<10){
// 	echo "12*$a=";
// 	echo $a*12;
// 	echo "<br>";
// 	$a++;
// }
 //other method for table
 // $a=1;
 // define ('num' ,5);
 // while($a<=10){
 // 	echo $a*num;
 // 	echo '<br>';
 // 	$a++;
 // }
 


/* @@@@@@@@@@@@@@@@@@@@@  for loop    @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@      */
// METHOD 1
define ('NUM' ,3);
for($i=1;$i<=10;$i++){
	echo $i*NUM;
	echo '<br>';

}
//METHOD 2
for ($x = 1; $x <= 10; $x++) {
     "2 * $x = ";  
	echo $x * 2 ;
	echo " <br> " ;	
}
//METHOD 3 
$a = 2;
for ($i=1; $i <=10; $i++) {
echo "$a * " . $i . " = ". $i*2;
echo "<br>";
}


?>