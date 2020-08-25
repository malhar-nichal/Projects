

<?php 


$file = fopen ("database.csv", 'r');


$res =  	"<div  class='container' >".  
	'<table  id="student">'.
		
 '<tbody>'; 


	while (($data=fgetcsv($file,100,',') )!== FALSE ){

			 

			$res = $res.'<tr>'.
	 
			  "<td>".$data[0]."</td>".
			  "<td>".$data[1]."</td>". 
			  "<td>".$data[2]."</td>". 
			  "<td>".$data[3]."</td>". 
			  "<td>".$data[4]."</td>". 
			  "<td>".$data[5]."</td>". 
			  "<td>".$data[6]."</td>". 
			  "<td>".$data[7]."</td>"; 
			 } 
		

		
	
	$res =$res .	'</tbody>'. 
	'</table>'.
'</div>';

fclose($file);

echo $res;  
 ?>