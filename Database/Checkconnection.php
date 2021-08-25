
<?php 
$link = mysqli_connect("localhost", "root", ""); 
// Check connection 
if($link === false){ die("ERROR: Could not connect. " . mysqli_connect_error()); } 
// Print host info 
echo "Connect Successfully. Host info: " . mysqli_get_host_info($link); 
// Close connection 
mysqli_close($link); 
?>
