<?php 
//DB name is EBookOdering
$link = mysqli_connect("localhost", "root", "", " EBookOdering"); 
// Check connection 
if($link === false){ die("ERROR: Could not connect. " . mysqli_connect_error()); }
//table name is Userlogin 
$sql = "CREATE TABLE Userlogin( 
user_name VARCHAR(30) NOT NULL, 
email VARCHAR(70) NOT NULL UNIQUE,
Passward VARCHAR(30) NOT NULL, 
)"; 
if(mysqli_query($link, $sql))
{ echo "Table created successfully."; } 
Else
{ echo "ERROR: Could not able to execute $sql. " . mysqli_error($link); } 
 
mysqli_close($link); ?>

