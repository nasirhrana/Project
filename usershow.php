<?php
	$conn = mysqli_connect("127.0.0.1:3306","root", "", "project");
	if($conn){
		$query="SELECT * FROM `userupdate`";
		$result = mysqli_query($conn,$query);		
		while($row=mysqli_fetch_assoc($result)){
			echo $row['productName'];
			echo $row['productQuality'];
			echo $row['productPrice'];
			echo $row['phone'];
			echo $row['address'];
			echo "<a href='deleteproduct.php?productName=$row[productName]'>delete</a>";
			echo "<br/>";
		}
	}
?>