
        <?php
       
        function getQuery($sql)
        {
            
            $conn = mysqli_connect("localhost","root","","echoed");
            
            if(!$conn)
            {
                echo die("Database connection faild !".mysqli_connect_error());
            }
            
            if(mysqli_query($conn,$sql))
            {
                return true;
            }
            else
            {
                return false;
            }
            
        }
        function getJSONString($sql)
            {
                $conn = mysqli_connect("localhost","root","","echoed");
                if(!$conn)
                {
                     echo die("Database connection faild !".mysqli_connect_error());
                }
                
                $result = mysqli_query($conn, $sql)or die(mysqli_error());
                if(mysqli_num_rows($result)>0)
                {
                    $arr=array();
	                while($row = mysqli_fetch_assoc($result))
                    {
		              $arr[]=$row;
	               }
                }
	            
	            return json_encode($arr);
            }
        ?>