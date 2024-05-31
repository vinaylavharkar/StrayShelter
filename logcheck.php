<?php
session_start();

$con = mysqli_connect('localhost','root','','strayshelter');
$user=$_POST['user'];
$password=$_POST['pass'];

$s = "select * from drregister where username='$user' && password='$password'";

$result=mysqli_query($con, $s);
$num=mysqli_num_rows($result);

if($num==1){
    $_SESSION['user']=$user;
    echo "<script>alert ('Hurray you are logged in Sucessfully'); </script>";
    header('location:doctdesk.php');
}else{
    echo "<script>alert ('Wrong Password');
    window.location.href='loginVet_form.php';
    </script>  ";
    // header('location:login.php');
    
}
?>