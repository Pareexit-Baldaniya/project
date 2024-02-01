<?php
$server="localhost";
$user="root";
$password="";
$database="lms";

$con=mysqli_connect("localhost","root");

$db=mysqli_select_db($con,"lms");

print_r($fetch_rec);
mysqli_close($con);

if($db)
echo "database selected successfully";

else
echo "database not selected ";

?>