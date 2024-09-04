<?php
$conn=mysqli_connect("localhost","root","","test") or die("connection failed");
if($conn){
    // echo 'connection succussful';
    }

if(isset($_GET['del']) && @$_GET['del']!=''){
    $delsql="SELECT test_image FROM image WHERE test_id= '".$_GET['del']."'";
    $delsqlquery=mysqli_query($conn,$delsql) or die("query failed:select");
    $rowimgedelete= mysqli_fetch_assoc($delsqlquery);

    unlink($rowimgedelete['test_image']);

    $sql= "DELETE FROM image WHERE test_id='".$_GET['del']."'";
    $delsqlquery=mysqli_query($conn,$sql); 
    header("location:index.php");


    
}


