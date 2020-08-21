<?php 
	$sid = $_POST["sid"];
	$req = []; 

	$found = FALSE;      
	$file = fopen ("database.csv", 'r');
	while (($data=fgetcsv($file,100,',') )!== FALSE ){

		if ($sid == $data[0]){
			$req = $data; 
			$found = TRUE;
			break;
		}
	}

	fclose ($file ); 
	
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Search A Student</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/searchstyle.css">
	 
	<style type="text/css">
			 	
		#student {
		  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		  border-collapse: collapse;
		  width: 95%;
		  margin-top: 100px;
		  font-size: 20px;

		}

		#student td, #student th {
		  border: 1px solid #ddd;
		  padding: 8px;
		}

		#student tr:nth-child(even){background-color: #f2f2f2;}

		#student tr:hover {background-color: #ddd;}

		#student th {
		  padding-top: 12px;
		  padding-bottom: 12px;
		  text-align: left;
		  background-color: #4CAF50;
		  color: white;
		}

#error  {
	font-size: 30px; 
	color: red; 

}

	 </style>
	
</head>
<body>

	<div class="navbar">
		<a href="../templates/index.html"><i class="material-icons" style="font-size:48px;color:red">arrow_back</i></a><span>Search</span> </div>	
	<form  name = "myform" action="search.php" method="post" onsubmit="" >	



<table>	
<tr>	
<td>	<span>	Enter ID to Search </span></td></tr>

<tr>	<td>	<input type="text" name="sid" id="sid"></td></tr>
</table>

<div>	
<span>	
<button id="btn">Submit</button>
</span>
</div>
	</form>

	<div  class="container" >
	<table  id="student">
		

				<?php
			if ($found){
			echo'<thead>'; 
			echo '<tr>';
				echo '<td>Student ID</td>';
				echo '<td>Student Name</td>';
				echo '<td>Gender</td>';
				echo '<td>City</td>';
				echo '<td>State</td>';
				echo '<td>Email</td>';
				echo '<td>Qualification</td>';
				echo '<td>Stream</td>';
			echo '</tr>';
		echo '</thead>';
		echo '<tbody>';
			echo '<tr>';
	 
			 echo "<td>".$req[0]."</td>"; 
			 echo "<td>".$req[1]."</td>"; 
			 echo "<td>".$req[2]."</td>"; 
			 echo "<td>".$req[3]."</td>"; 
			 echo "<td>".$req[4]."</td>"; 
			 echo "<td>".$req[5]."</td>"; 
			 echo "<td>".$req[6]."</td>"; 
			 echo "<td>".$req[7]."</td>"; 
}
else{
	echo "<span id= 'error' <strong> ID is not found in database</strong></span>  "; 
}
			?>
			</tr>
			

		</tbody>
	</table>
</div>	
</script>
</body></html>


