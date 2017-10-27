<?php
$servername="localhost";
$username="root";
$dbname="ants1";
$password="";
$con=mysql_connect($servername,$username,$password);
mysql_select_db($dbname);
$Name=$_POST['Name'];
$Number=$_POST['Number'];
$Email=$_POST['Email'];
$message=$_POST['message'];
$sql="INSERT into info(Name,Number,Email,message) values('".$Name."','".$Number."','".$Email."','".$message."')";
if(mysql_query($sql,$con))
{
	echo"you records are entered";
	header("location:end.html");
}
else{
	echo"value not entered :".$con->error;
}
?>