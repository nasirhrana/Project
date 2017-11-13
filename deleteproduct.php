<?php
	$productName=$_REQUEST['productName'];
	$productQuality=$_REQUEST['productQuality'];
	$conn = mysqli_connect("localhost","root", "", "project");
	if($conn){
		$query="DELETE FROM update WHERE productName=$productName && productQuality=$productQuality ";
		mysqli_query($conn,$query);
		
		//header("location: show.php");
		echo "hello";
	}
?>