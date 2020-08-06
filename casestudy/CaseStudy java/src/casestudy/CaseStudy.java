
package casestudy;

import com.opencsv.CSVParser;
import com.opencsv.CSVParserBuilder;
import com.opencsv.CSVReader;
import com.opencsv.CSVReaderBuilder;
import java.io.File;
import java.util.*; 
import com.opencsv.CSVWriter; 
import java.io.BufferedReader;
import java.io.FileReader;
import java.io.FileWriter;

public class CaseStudy {

   private static String CSV_FILE_PATH = "./colleges.csv"; //Path to store college data. 
   
   public static void main(String[] args) {
        
        Scanner sc = new Scanner (System.in);
        while (true){
        System.out.println("Enter the Operation No. which you want to Perform ");
        int n = sc.nextInt(); 
         if (n==1 ){   
             boolean repeat = true; 
        while (repeat ){ 
            writeData (CSV_FILE_PATH) ;
            System.out.println("Want to add more data.(y/n)");
            if (Character.valueOf (sc.next ().charAt(0)) == 'y') {
                repeat = true; 
            }else{
                repeat =false; 
                showCsvFile (CSV_FILE_PATH);
            }
             
        }
         }else if (n==2){
             System.out.println("");
             System.out.println("Displaying Engineering Colleges in Mumbai  \n");
             CollegeCityAndType ("Mumbai", "Engineering", CSV_FILE_PATH );
         }
         else {
             System.out.println("");
             System.out.println("Enter CollegeID to delete the record ");
             
             removeCollegeData (sc.nextInt (),CSV_FILE_PATH); 
        }
        System.out.println("");
            System.out.println("");
            System.out.println("");
        }
   }
    
    public static void writeData (String path ){
        
    File file = new File (path) ;
    
    try {
    FileWriter outputfile = new FileWriter (file,true) ; 
    
     CSVWriter writer = new CSVWriter(outputfile, ',', 
                                             CSVWriter.NO_QUOTE_CHARACTER, 
                                             CSVWriter.DEFAULT_ESCAPE_CHARACTER, 
                                             CSVWriter.DEFAULT_LINE_END); 
     
     List<String []> datalist = new ArrayList <String []>(); 
     
     //Creating College Object for new data. 
     College c = new College () ;
     String [] row = c.inputedDataInStringArray();
     datalist.add (row); 
     writer.writeAll(datalist);
     writer.close () ; 
     outputfile.close();
      
    }
    
    
    catch (Exception e){
        e.printStackTrace();
    }
    
}
    
    public static void CollegeCityAndType (String city, String type, String path ){
        File file = new File (path); 
        try {
             
            BufferedReader br = new BufferedReader (new FileReader (file)) ;
            
            String temp[];
            String line ;
            while ((line = br.readLine()) != null ) {
               
                temp = line.split (","); 
                College c = new College (temp) ;
               
                if (c.city.equals (city) && c.collegeType.equals(type) ){ 
                    System.out.println(line);
            }
        }
           br.close();
        }
        catch (Exception e){
            e.printStackTrace();
        }
       
    }

    public static void removeCollegeData (int id,String  path){
        File old  = new File (path);
        String temp = "temp.csv" ; 
        File newFile =  new File (temp);
        try {
        FileReader fr = new FileReader (old); 
        FileWriter fw = new FileWriter (newFile) ;
         CSVWriter writer = new CSVWriter(fw, ',', 
                                             CSVWriter.NO_QUOTE_CHARACTER, 
                                             CSVWriter.DEFAULT_ESCAPE_CHARACTER, 
                                             CSVWriter.DEFAULT_LINE_END);         
        BufferedReader br = new BufferedReader (fr); 
        String line = ""; 
         
        List <String []> datalist = new ArrayList <String []> (); 
        while ((line= br.readLine()) !=null){
            College c = new College (line.split (",")); 
            if (c.collegeId != id ) {
                datalist.add (line.split(",")) ; 
                
            }
        }
        writer.writeAll(datalist);
        writer.close ();
        br.close();
        fr.close();
        File d = new File (path); 
         
        d.delete();      
        File dump = new File (path); 
        newFile.renameTo(dump); 
        System.out.println("Data Deleted Succsessfully ");
        showCsvFile (path); 
        }
        
        catch (Exception e){
            e.printStackTrace();
        }
    }

    public static void showCsvFile (String path){
        try{
            System.out.println("");
            System.out.println("");
            System.out.println("");
        BufferedReader br =new BufferedReader (new FileReader (new File (path))); 
        String line = " "; 
        while ((line= br.readLine ())!=null){
            System.out.println(line);
        }
        br.close(); 
        }
        
          catch (Exception e){
            e.printStackTrace();
        }
        System.out.println("");
        System.out.println("");
        System.out.println("");
    }


}

class College {
    int collegeId ;
    String collegeName ; 
    String collegeType ;
    String city ;
    int fees ;
    int pinCode ;
    
    College ( ) {
        
        Scanner sc = new Scanner (System.in); 
        
        //Taking Data from Console
        System.out.println("Enter a College ID" );
        this.collegeId = sc.nextInt (); 
        sc.nextLine(); 
        
        System.out.println("Enter a College Name" );
        this.collegeName = sc.nextLine ();
        
        
        System.out.println("Enter a College Type" );
        this.collegeType = sc.nextLine (); 
       
        
        System.out.println("Enter a College City" );
        this.city= sc.nextLine(); 
        
        
        System.out.println("Enter a College fees" );
        this.fees= sc.nextInt() ;
        
        
        System.out.println("Enter a College Pin Code" );
        this.pinCode = sc.nextInt (); 
    
}
    
    College (String [] data){
        this.collegeId = Integer.parseInt (data[0]) ;
        this.collegeName = data[1];
        this.collegeType =data[2]; 
        this.city = data[3]; 
        this.fees= Integer.parseInt(data[4]);
        this.pinCode =Integer.parseInt(data[5]); 
        
      }
    
    
    public  String [] inputedDataInStringArray (){
     String [] data = new String [6]; 
     data[0]= String.valueOf(collegeId)  ;
     data[1]= String.valueOf(collegeName)  ;
     data[2]= String.valueOf(collegeType)  ;
     data[3]= String.valueOf(city)  ;
     data[4]= String.valueOf(fees)  ;
     data[5]= String.valueOf(pinCode)  ;
     return data ; 
    }
    
     
    
}