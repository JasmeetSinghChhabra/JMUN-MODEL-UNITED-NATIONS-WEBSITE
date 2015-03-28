 <?php

$db_host="localhost";
$db_user="jmun2015";
$db_pass="letsdoit";
$db_name="jmun";



if(isset($_POST['submit2']))
{

$name = $_POST['qu1'];
$age = $_POST['qu2'];
$year = $_POST['qu3'];
$institute = $_POST['qu4'];
$phone = $_POST['qu5'];
$email = $_POST['qu6'];
$a= $_POST['qu7'];
$b= $_POST['qu8'];
$c= $_POST['qu9'];
$d= $_POST['qu10'];
$e= $_POST['qu11'];
$f = $_POST['qu12'];
$g = $_POST['qu13'];
$h= $_POST['qu14'];
$i = $_POST['qu15'];
$j = $_POST['qu16'];
$k = $_POST['qu17'];




$connect = mysql_connect($db_host,$db_user,$db_pass) or die("Could not Connect");
mysql_select_db("jmun",$connect) or die("Database not found");	   	  


  
mysql_query("INSERT INTO delegate (name,age,year,institute,phone,email,committee1,country1,committee2,country2,committee3,country3,muns,experience,ques1,ques2,acc) VALUES  
        ('$name','$age','$year','$institute','$phone','$email','$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k')") or die("Not Inserted");   
		
header("Location:../coming_soon/rs.html");
die();
}		

?>