
<html>
<body>
 
<?php

$productName = $_POST['productName'];
$productQuality = $_POST['productQuality'];
$productPrice = $_POST['productPrice'];

echo "hello ".$productName."".$productQuality."".$productPrice;



$conn = mysqli_connect("localhost","root","","project");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO `update` (`productName`, `productQuality`,`productPrice`) 
VALUES ('$productName', '$productQuality','$productPrice')";

if(mysqli_query($conn, $sql)) {
    echo " record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



?>
 </body>
</html>

