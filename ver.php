<?php
$servername="localhost";
$username="root";
$dbname="ants1";
$password="";
$con=mysql_connect($servername,$username,$password);
mysql_select_db($dbname);
if(isset($_POST['id']))
{
$id=$_POST['id'];
$password=$_POST['password'];
$sql="select * from admin_dt where id='".$id."' and password='".$password."' limit 1";
	$res=mysql_query($sql);
	$num = mysql_num_rows($res);
	if($num > 0)
	{ 
     if(mysql_query($sql,$con))
      {
	
		echo"welcome admin";
		header("location:addb.php");
	  }

		
	}
	else
	{
		
		echo"Enter a valid username or password";
		
		
		header("location:admin.html");
	}
}


?>