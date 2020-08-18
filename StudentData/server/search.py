#!C:\Python38\python.exe
import cgi,os,csv
from prettytable import PrettyTable  
print ("content-type:text/html\n\n")


path = "database.csv"

with open (path, 'r') as file :
	form = cgi.FieldStorage ()
	sid = str (form.getvalue ("sid"))
	csvreader = csv.reader (file)	
	line = []
	fields = next(csvreader) 
	for row in csvreader:
		if row[0] == sid :
			line = row
			break

	x = PrettyTable (fields)
	x.add_row (line)
	print (x.get_html_string () )			


