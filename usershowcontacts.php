<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
th {
    text-align: left;
}
</style>
</head>
<body>



<form action="">

		<?php
			$conn = mysqli_connect("127.0.0.1:3306","root", "", "project");
			if($conn){
				$query="SELECT * FROM `userupdate`";
				$result = mysqli_query($conn,$query);
				echo "<table>";
				echo "<tr>"."<th>"."productName"."</th>"."<th>"."productQuality"."</th>"."<th>"."productPrice"."</th>"."<th>"."phone"."</th>"."<th>"."address"."</th>"."</tr>";
				
				while($row=mysqli_fetch_assoc($result)){
					echo "<tr>";
					echo "<td>".$row['productName']."</td>"."<td>".$row['productQuality']."</td>"."<td>".$row['productPrice']."</td>"."<td>".$row['phone']."</td>"."<td>".$row['address']."</td>";
					echo "</tr>";

				}
				echo "</table>";
			}
		?>


</form>
</body>
</html>
