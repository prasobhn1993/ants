<?php
$servername="localhost";
$username="root";
$dbname="ants1";
$password="";
$con=mysql_connect($servername,$username,$password);
mysql_select_db($dbname);
$Name=isset($_GET['Name']);
$sql="DELETE FROM info";
$res=mysql_query($sql);
if (!mysql_query($sql,$con))
{
die('Error: ' . mysql_error());
}
echo "1 record deleted go back to delete another!";
header("location:addb.php");

mysql_close($con)
 
?>
