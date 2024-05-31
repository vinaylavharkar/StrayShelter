<?php
require('checkdata.php');


$name=$_POST['fname'].' '.$_POST['lname'];
$address=$_POST['address'];
$phone=$_POST['phone'];
 $pet_adopted_before=$_POST['petsadopted'];
// $quer2="truncate table "
$query="INSERT INTO `adoptiondata`(`name`, `address`, `phone`,`pet_adopted_before`) VALUES ('$name','$address','$phone','$pet_adopted_before')";

$var=mysqli_query($obj, $query);

if($var){
	echo "<script> alert('Details Uploaded Sucessfully'); 
	window.location.href='home.html';
	</script>";

}else{
	echo "<script> alert('Failed to register'); 
	window.location.href='register.php';
	</script>";
}


?>