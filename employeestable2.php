<?php
	              
					$con=mysqli_connect("localhost","root","","flightmanagementsystem");
					// Check connection
					if (mysqli_connect_errno())
					{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}

					$result = mysqli_query($con,"SELECT * FROM employees");

					/*echo "<table border='1'>
					<tr>
					<th>Firstname</th>
					<th>Lastname</th>
					</tr>";*/
					while($row = mysqli_fetch_array($result))
					{
				    
					echo "<tr style='border-bottom:1px solid lightgrey; padding: 15px 0px !important;'>";
					echo "<td style='padding-top: 8px;padding-bottom: 8px; padding-left: 90px;'>". $row['employee_id'] . "</td>";
					echo "<td>" . $row['employee_name'] . "</td>";
					echo "<td style='padding-right:30px;'>" . $row['employee_contact'] . "</td>";
					echo "<td style='padding-right:30px;color: #ef494d;'>" . $row['employee_address'] . "</td>";
					echo "<td>" . $row['employee_airlines'] . "</td>";
				    echo "</tr>";
					}
					
					echo "</table>";

					mysqli_close($con);
					?>