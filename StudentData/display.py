#!C:\Python38\python.exe
import cgi,os,csv
from prettytable import PrettyTable  
print ("content-type:text/html\n\n")


path = "database.csv"

with open (path, 'r') as file :
	fields = next (csv.reader (file))
	data = file.readlines ()
	
	x = PrettyTable(fields)
	for line in  data :
		
		x.add_row (line.split (","))

	
	print (x.get_html_string () )	