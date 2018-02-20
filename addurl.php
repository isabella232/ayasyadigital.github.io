<?php

// Get Settings
include "settings.php";

// Set Varibles
$url=$_POST['pageurl'];
$title=$_POST['title'];
$des=$_POST['pagecontent'];
mysql_connect($localhost,$ga1e7gxk_user,$a1b2c3d4e5); // Connect to the DB
@mysql_select_db($ga1e7gxk_searchengine) or die( "Unable to select database");
mysql_query("INSERT INTO engine.ga1e7gxk_searchengine 
(pageurl, title, pagecontent) VALUES('$url', '$title', '$des' ) ") 
or die(mysql_error());  
mysql_close();
Print "The link has been successfully added to the database. <a href=\"admin.php\">Go Back</a>"; 
?>
