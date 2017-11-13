<?php
 
 $username = $_POST["username"];
 $password = $_POST["password"];
 //echo $username ;
 //echo $password;
 
 $sql = "SELECT * FROM `User`";
 $conn = mysqli_connect("localhost","root","","project");
            
            if(!$conn)
            {
                echo die("Database connection faild !".mysqli_connect_error());
            }
            
			$result = mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)> 0)
			{
				while($row = mysqli_fetch_assoc($result))
				{
					if("admin" == $row["userName"] && "admin" == $row["password"])
					{
					header("Location:admin.php");
						//echo "login successfully";
					}
				}
					
				
			}
			else
			{
				echo "error";
			}
            
			
 
?>