#!C:\Python38\python.exe
import cgi,os,csv
from prettytable import PrettyTable  
print ("content-type:text/html\n\n")

path = "database.csv"
form = cgi.FieldStorage ()
name = str (form.getvalue ("name"))

sid = int (form.getvalue ("id"))
male = str (form.getvalue ("male"))

female =str ( form.getvalue ("female"))
city = str (form.getvalue ("city"))
state = str (form.getvalue ("state"))
email = str (form.getvalue ("email"))
qualification = str (form.getvalue ("qualification"))
stream = str (form.getvalue ("st"))

with open (path, 'a', newline = '') as file :
	
	writer = csv.writer (file)
	gen = "male" if male == "on" else "female"
	
	writer.writerow ([sid,name,gen,city,state,email,qualification,stream])

	print("<h3>Data Added Successfully</h3>")


with open (path, 'r') as file :
	csvreader = csv.reader (file)
	fields = next(csvreader) 
	line = [sid,name,gen,city,state,email,qualification,stream]
	x = PrettyTable (fields)
	x.add_row (line)
	print (x.get_html_string () )			

