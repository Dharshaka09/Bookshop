<?php
 
$link = mysqli_connect ("localhost", "root", "", "demo"); 
If ($link === false)
{ 
die ("ERROR: Could not connect. " . mysqli_connect_error()); 
}

$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']); $last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']); $email = mysqli_real_escape_string($link, $_REQUEST['email']); 

$sql = "INSERT INTO User (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";
 
if (mysqli_query($link, $sql))
{ 
echo "Records added successfully."; 
} 
Else
{ echo "ERROR: Could not able to execute $sql. " . mysqli_error($link); 
} 

mysqli_close($link); 
?>
