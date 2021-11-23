<?php	
	
	include ('header.php'); 

?>
<?php include 'cn.php'?>

<style>





  table {
    padding: 100px;
  margin: 0 auto;
  margin-top: 30px;
  border-collapse: collapse;
  width: 80%;
  font-family: Arial, Helvetica, sans-serif;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
 }
 th{
background:#0cbabf;
color:#fff;
padding: 30px 20px;
font-weight:bold;
}
tr, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #0cbabf;
  padding: 30px 20px;
}
tr{
    background: #f2f2f2;
}
tr:nth-child(2n) {
    background:#d9d9d9;
}
tr:hover {
   background-color: #4d4d4d;
   color:#f2f2f2;
}


.size{
		min-height: 0px;
		padding: 60px 0 40px 0;
		
	}
	.loader{
		display:none;
		width:69px;
		height:89px;
		position:absolute;
		top:25%;
		left:50%;
		padding:2px;
		z-index: 1;
	}
	.loader .fa{
		color: #e74c3c;
		font-size: 52px !important;
	}
	.form-group{
		text-align: left;
	}
	h1{
		color: Red;
	}
	h3{
		color: #e74c3c;
		text-align: center;
	}
	.red-bar{
		width: 25%;
	}
	span{
		display: block;
	}
	.name{
		color: #e74c3c;
		font-size: 22px;
		font-weight: 700;
	}
	.donors_data{
		background-color: white;
		border-radius: 5px;
		margin:20px 5px 0px 5px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		padding: 20px;
	}
	body:before {
    content: "";
    position: fixed;
    background: url(cropped-1920-1080-873130.jpg);
    background-size: cover;
    z-index: -1;
    height: 100%; width: 100%; 
    transform: scale(3);
    filter: blur(2px);
}

</style>
<div class="manageDonors">

 
	<center><h1 class='buttonc' title='Create New Contact'><u>Donors Details</u></h1></center>
	
	
	</table>
	<center><table border="" cellspacing="" cellpadding=""  bgcolor='White '>
		<thead>
			<tr>
				
				<th>Name</th>
				<th>Blood Group</th>
				<th>Gender</th>
				<th>Email</th>
				<th>Contact_no</th>
				<th>City</th>
				<th>Last Donate Date </th>
				
			</tr>
		</thead>
	
</center>
<center>
		<tbody>
			<?php
			
		
			$sql = "SELECT name,blood_group,gender,email,contact_no,city,dateb FROM donate_form"  ;
			$result = $conn->query($sql);

			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo "<tr>
					
						<td>".$row['name']." </td>
						<td>".$row['blood_group']."</td>
						<td>".$row['gender']."</td>
						<td>".$row['email']."</td>
						<td>".$row['contact_no']." </td>
						<td>".$row['city']."</td>
						<td>".$row['dateb']."</td>
						
					</tr>";
				}
				echo "</table>";
			} else {
				echo "<tr><td colspan='10'><center>No data avaliable</center></td></tr>";
			}
			?>
		</tbody>
	</center>	
	</table>
	<center><a href="index.php">Back to Home Page</a></center>
</div>

<?php	

	include ('footer.php'); 

?>
