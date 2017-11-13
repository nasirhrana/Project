<?php
	$productName=$_REQUEST['productName'];
	$productQuality=$_REQUEST['productQuality'];
	$productPrice=$_REQUEST['productPrice'];
	$phone=$_REQUEST['phone'];
	$address=$_REQUEST['address'];
	$conn = mysqli_connect("localhost","root", "", "project");
	if($conn){
		$query="UPDATE user SET productPrice='$productPrice' WHERE productName=$productName && productQuality=$productQuality ";
		mysqli_query($conn,$query);
		
		// header("location: show.php");
		echo "succesfully updated";
	}
?>