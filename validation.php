<?php
$conn = mysqli_connect("localhost","root","acecreative") or die ("not connected");
mysqli_select_db($conn,"s_database") or die ("no db found");

if(isset($_POST['submit'])){ 
	
	$username = $_POST['username'];
	$password = $_POST['password']; 
	
	$s = "select * from register where emailUsers = '$username' && pwdUser = '$password'";
	
	$result = mysqli_query($conn,$s);
	
	$num = mysqli_num_rows($result);
	if($num == 1){ 
		header('location: homepage.php');
	}else{ 
		header('location: index.php'); 
	
	}
	mysqli_close($conn);
}
?>