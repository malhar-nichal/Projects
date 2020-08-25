<?php 
	
	$found = FALSE; 
	if (true){ 
	$sid = $_POST["sid"];
	$req = []; 

	     
	$file = fopen ("database.csv", 'r');
	while (($data=fgetcsv($file,100,',') )!== FALSE ){

		if ($sid == $data[0]){
			$req = $data; 
			$found = TRUE;
			break;
		}
	}
	
	fclose ($file ); 
}
	

			if ($found){
			echo'<table id = "student" ><thead>'
			 .'<tr>'.
				 '<td>Student ID</td>'.
				 '<td>Student Name</td>'.
				 '<td>Gender</td>'.
				 '<td>City</td>'.
				 '<td>State</td>'.
				 '<td>Email</td>'.
				 '<td>Qualification</td>'.
				 '<td>Stream</td>'.
			 '</tr>'.
		 '</thead>'.
		 '<tbody>'.
			 '<tr>'.
	 
			  "<td>".$req[0]."</td>". 
			  "<td>".$req[1]."</td>". 
			  "<td>".$req[2]."</td>". 
			  "<td>".$req[3]."</td>". 
			  "<td>".$req[4]."</td>". 
			 "<td>".$req[5]."</td>".
			  "<td>".$req[6]."</td>". 
			  "<td>".$req[7]."</td>"."</tr></tbody></table>";  
}
else{
	echo "<span id= 'error' <strong> ID is not found in database</strong></span>  "; 
}
			?>
			
</script>
</body></html>


