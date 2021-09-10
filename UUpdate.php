<?php 
$link = mysqli_connect("localhost", "root", "", "demo"); 
if($link === false)
{ die("ERROR: Could not connect. " . mysqli_connect_error()); 
} 
$sql = "UPDATE persons SET email='peterparker_new@mail.com' WHERE id=1";
 if(mysqli_query($link, $sql))
{ echo "Records were updated successfully."; } 
else 
{ echo "ERROR: Could not able to execute $sql. " . mysqli_error($link); 
} 
mysqli_close($link); 
?>
