<?php 
	

	$file = fopen ("database.csv" ,"a"); 
	$id = $_POST['id'];
	$name = $_POST['name'];
	$gen = $_POST ['gen'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$email = $_POST['email']; 
	$qualification = $_POST['qualification'];
	$stream = $_POST['st'];

	$data = array ($id,$name, $gen, $city, $state,$email,$qualification,$stream); 
	fputcsv ($file, $data); 
	$suc = TRUE; 
	fclose($file); 

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add a Student Detials</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript" src = "js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/addstyle.css">
</head>
<body>

<div class="box">

<div id="left" >
<a href="../templates/index.html"><i class="material-icons" style="font-size:48px;color:red">arrow_back</i></a>
	<h1>Add <br>Student<br> Details</h1></div>	
<div id="right" > 
<form action="add.php" method="post">
<table>
	<tr>
		<td>
			<span><input type="number" class="inp" name="id" placeholder="Student ID"></span>
		</td>
		<td>
			<span><input class="inp" type="text" name="name" placeholder="Student Name"></span>
		</td>
	</tr>
	<tr>
		
		<td><input type="radio" name="gen" value="Male" class="gen"> Male</td><td><input type="radio" name="gen" value="Female" class="gen"> Female</td>
	</tr>
	<tr>
		
		<td>
			<span><input class="inp" type="text" name="city" placeholder="City"></span>
		</td>
		
		<td>
			<span><input type="text" class="inp" name="state" placeholder="State"></span>
		</td>
	</tr>
	<tr>
		
		<td>
			<span><input type="email" class="inp" name="email" placeholder="Email" id="mail"></span>
		</td>

	</tr>
	<tr>
		<td>
			<span><input type="text" class="inp" name="qualification" placeholder="Qualification"	></span>
		</td>
	
		
		<td>
			<span><input type="text" name="st" class="inp"  placeholder="Stream"></span>
		</td>
	</tr>
</table>
<button id="btn" type="submit"> Submit </button>
</form>



<div  class="container" >
<table  id="student">
		

<?php
if (TRUE){

echo "<h1>Data Added Successfully</h1>"	;
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

echo '<tr>';

echo "<td>".$data[0]."</td>"; 
echo "<td>".$data[1]."</td>"; 
echo "<td>".$data[2]."</td>"; 
echo "<td>".$data[3]."</td>"; 
echo "<td>".$data[4]."</td>"; 
echo "<td>".$data[5]."</td>"; 
echo "<td>".$data[6]."</td>"; 
echo "<td>".$data[7]."</td>";
echo "</tr>";
} 
?>



		
</table>
</div>	

	
</div>
</div>
</body>
</html>