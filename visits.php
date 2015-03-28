<?php
$localhost = 'localhost';
$dbuser =  'jmun2015';
$dbpass = 'letsdoit';
$dbname = 'jmun';
	global $localhost, $dbuser, $dbpass, $dbname, $dbtablehits,$dbtableinfo,$maxrows; 
	$link = mysql_connect($localhost, $dbuser, $dbpass); 
		if (!$link) 
	{
	    die('Could not connect: ' . mysql_error());  // remove ?
	}	
	$dbselect=mysql_select_db($dbname); 
	if (!$dbselect) 
	{
    	die ("Can't use database $dbname! : " . mysql_error()); // remove ?
	}
	if(mysql_num_rows(mysql_query("SELECT visit FROM visits")))
	{
		$updatecounter = mysql_query("UPDATE visits SET visit = visit+1");
		if (!$updatecounter) 
		{
		die ("Can't update the counter : " . mysql_error()); // remove ?
		}
	} 
	else
	{
	$insert = mysql_query("INSERT INTO visits VALUES ('1')");
			if (!$insert) 
		{
    		die ("Can\'t insert into $dbtablehits : " . mysql_error()); // remove ?
		}
	}
mysql_close($link);
?>
