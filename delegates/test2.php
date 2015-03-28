<?php

$db_host="localhost";
$db_user="jmun2015";
$db_pass="letsdoit";
$db_name="jmun";



if(isset($_POST['submit2']))
{

$name = $_POST['qu1'];
$course = $_POST['qu2'];
$college = $_POST['qu3'];
$year = $_POST['qu4'];
$dob = $_POST['qu5'];
$phone = $_POST['qu6'];
$email = $_POST['qu7'];
$address = $_POST['qu8'];
$exp_delegate = $_POST['qu9'];
$post = $_POST['new'];
$exp_photographer = $_POST['qu10'];
$exp_ip = $_POST['qu11'];
$ques = $_POST['qu12'];




$connect = mysql_connect($db_host,$db_user,$db_pass) or die("Could not Connect");
mysql_select_db("jmun",$connect) or die("Database not found");	   	  


  
$qry=mysql_query("INSERT INTO ip (name,course,college,year,dob,phone,email,address,post,exp_delegate,exp_photographer,exp_ip,ques) VALUES  
        ('$name','$course','$college','$year','$dob','$phone','$email','$address','$post','$exp_delegate','$exp_photographer','$exp_ip','$ques')") or die("Not Inserted");   
		
header("Location:../coming_soon/rs.html");
die();
}		

?>