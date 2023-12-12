<?php
$con = mysqli_connect("localhost","root","","booktbl");
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
exit();
}
mysqli_select_db($con, "booktbl");
if($con){
echo "";
}else{
echo "Error Occurred";
}
?>