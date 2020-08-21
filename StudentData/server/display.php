<!DOCTYPE html>
<html>
<head>
	<title>Display Database</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<script type="text/javascript" src = "js/bootstrap.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style type="text/css">
			
			body{
				background-color: #a28089; 
				color: black;
			}

			#student {
		  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		  border-collapse: collapse;
		  width: 95%;
		  margin-top: 100px;
		  font-size: 20px;

		}

		#student td, #student th {
		  border: 3px solid #ddd;
		  padding: 8px;
		}
		#student tr:nth-child(even){background-color: #f2f2f2;}


		#student tr:nth-child(even){background-color: #f2f2f2;}

		#student tr:nth-child(odd){background-color: #grey;}


		#student tr:hover {background-color: #ddd;}

		#student th {
		  padding-top: 12px;
		  padding-bottom: 12px;
		  text-align: left;
		  background-color: #4CAF50;
		  color: white;
		}

		h1 {
			float: left;
			margin-top: 10px;
			margin-left: 30px;
			margin-bottom: 60px;
		}
		i{
			float: left;
		margin-top: 10px;
		left:0;
		top:0;
		}

	</style>
</head>
<body>
	<div><span><a href="../templates/index.html"><i class="material-icons" style="font-size:48px;color:red">arrow_back</i></a><h1>Student's Database </h1></span></div>

</body>
</html>



<?php 





echo 	"<div  class='container' >"; 
echo 	'<table  id="student">';
		
echo '<tbody>';
$isData_present = FALSE; 
$file = fopen ("database.csv", 'r');
	while (($data=fgetcsv($file,100,',') )!== FALSE ){

			$isData_present= TRUE; 

			echo '<tr>';
	 
			 echo "<td>".$data[0]."</td>"; 
			 echo "<td>".$data[1]."</td>"; 
			 echo "<td>".$data[2]."</td>"; 
			 echo "<td>".$data[3]."</td>"; 
			 echo "<td>".$data[4]."</td>"; 
			 echo "<td>".$data[5]."</td>"; 
			 echo "<td>".$data[6]."</td>"; 
			 echo "<td>".$data[7]."</td>";
			 } 
		

		
	
	echo 	'</tbody>'; 
	echo  '</table>';
echo '</div>';		
fclose($file); 
 ?>