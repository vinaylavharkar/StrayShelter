<?php

require('checkdata.php');
session_start();
$doc=$_SESSION['user'];

$name=$_POST['name'];
$address=$_POST['address'];
$clinicadd=$_POST['caddress'];
$servarea=$_POST['areatovisit'];
$phone=$_POST['phone'];
 $experience=$_POST['exp'];
 $quali=$_POST['quali'];
$username=$_POST['user'];
$password=$_POST['pass'];


if(isset($_POST['save']))
{
  $qr="UPDATE `drregister` SET `name`='$name',`address`='$address',`clinicadd`='$clinicadd',`servarea`='$servarea',`phone`='$phone',`exp`='$experience',`quali`='$quali',`username`='$username',`password`='$password' where `username`='$doc'";
  $result=mysqli_query($obj,$qr);

  if($result)
  {
    echo "<script> alert('Details Updated Sucessfully'); 
	window.location.href='doctGallery.php';
	</script>";

  }
}
if(isset($_POST['delete']))
{
    $qr="DELETE FROM `drregister` WHERE `username`='$doc' ";
    $result=mysqli_query($obj,$qr);

  if($result)
  {
    echo "<script> alert('Record deleted sucessfully'); 
	window.location.href='vetform.html';
	</script>";

  }
}


?>