<?php
require('checkdata.php');



$name=$_POST['fname'].' '.$_POST['lname'];
$address=$_POST['address'];
$clinicadd=$_POST['caddress'];
$servarea=$_POST['areatovisit'];
$phone=$_POST['phone'];
 $experience=$_POST['exp'];
$quali=$_POST['quali'];
$username=$_POST['user'];
$password=$_POST['pass'];
$query="UPDATE drregister
SET name = name='$name' address ='$address' address ='$address' address ='$address' address ='$address  
WHERE condition;";

$var=mysqli_query($obj, $query);

if($var){
	echo "<script> alert('Registration Sucessfull'); 
	window.location.href='home.html';
	</script>";

}else{
	echo "<script> alert('Failed to register'); 
	window.location.href='register.php';
	</script>";
}


?>