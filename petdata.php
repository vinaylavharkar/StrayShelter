<?php
require('checkdata.php');
$animaltype=$_POST['animaltype'];
$age=$_POST['age'];
$address=$_POST['address'];
$breed=$_POST['breed'];
$Oname=$_POST['Oname'];
$contact=$_POST['contact'];
//$img=$_POST['img'];


if(isset($_POST["submit"])){  
    if(!empty($_FILES["petimage"]["name"])) { 
    // Get file info 
    $fileName = basename($_FILES["petimage"]["name"]); 
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
        
	// Allow certain file formats 
    $allowTypes = array('jpg','png','jpeg','gif'); 
    if(in_array($fileType, $allowTypes)){ 
        $image = $_FILES['petimage']['tmp_name']; 
        $imgContent = addslashes(file_get_contents($image)); 

		$query="INSERT INTO `petdata`(`animaltype`, `age`, `address`, `breed`, `owner_name`,`contact`,`image`,`created`) VALUES ('$animaltype','$age','$address','$breed','$Oname','$contact','$imgContent',NOW())";
	}
	}
}

$var=mysqli_query($obj, $query);

if($var){
	echo "<script> alert('Details uploaded Sucessfully'); 
	window.location.href='home.html';
	</script>";

}else{
	echo "<script> alert('Opps service disabled temporalily, try later'); 
	window.location.href='addpet.html';
	</script>";
}
