
<html>
<body>
 
<?php

$productName = $_POST['productName'];
$productQuality = $_POST['productQuality'];
$productPrice = $_POST['productPrice'];
$phone = $_POST['phone'];
$address = $_POST['address'];

echo "hello ".$productName."".$productQuality."".$productPrice;



$conn = mysqli_connect("localhost","root","","project");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO `userupdate` (`productName`, `productQuality`,`productPrice`,`phone`,`address`) 
VALUES ('$productName', '$productQuality','$productPrice','$phone','$address')";

if(mysqli_query($conn, $sql)) {
    echo " record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



?>
 </body>
</html>

