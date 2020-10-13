<?php
	              
	              //Showing the table for departures


					$con=mysqli_connect("localhost","root","","flightmanagementsystem");
					// Check connection
					if (mysqli_connect_errno())
					{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}

					$result = mysqli_query($con,"SELECT * FROM departures");

					/*echo "<table border='1'>
					<tr>
					<th>Firstname</th>
					<th>Lastname</th>
					</tr>";*/
					while($row = mysqli_fetch_array($result))
					{
				    
					echo "<tr style='border-bottom:1px solid lightgrey; padding: 15px 0px !important;'>";
					echo "<td style='padding: 8px 0px;'>". $row['Flight_Time'] . "</td>";
					echo "<td>" . $row['Flight_No'] . "</td>";
					echo "<td>" . $row['Destination'] . "</td>";
					echo "<td>" . $row['Gate'] . "</td>";
					echo "<td>" . $row['Flight_Status'] . "</td>";
				    echo "</tr>";
					}
					
					echo "</table>";

					mysqli_close($con);
					?>