
<html>
<body>
 
<?php

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$userName = $_POST['userName'];
$password = $_POST['password'];
$Confirm_Password = $_POST['password'];
$phone = $_POST['phone'];
$nid = $_POST['nid'];
$address = $_POST['address'];
$g;
echo "hello ".$lastName."".$firstName."".$userName."".$password."".$phone;
if(isset($_POST['gender'])){
	
	$g = $_REQUEST['gender'];
}

//$Dob = $_POST["Dob"];


$conn = mysqli_connect("localhost","root","","project");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// $sql = "INSERT INTO user (firstName, lastName, userName,password,nid,dob,sex,address)
// VALUES('"+$firstName+"', '"+$lastName+"','"+$userName+"','"+$password+"','"+$nid+"','"+$Dob+"',''"+$g+"','"+$address+"')";
$sql = "INSERT INTO `user` (`firstName`, `lastName`, `userName`, `password`, `phone`, `nid`, `sex`, `address`) VALUES ('$firstName', '$lastName', '$userName', '$password', '$phone', '$nid', '$g', '$address')";

if(mysqli_query($conn, $sql)) {
    echo " record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



?>
 </body>
</html>

