<?php

$conn = mysql_connect("localhost","root","") or die ("not connected");
mysql_select_db("student_database") or die ("no db found");

if($conn){
	
	echo "connection is established";
	
}else { 

echo "no connection";

}
