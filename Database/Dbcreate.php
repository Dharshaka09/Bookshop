<?php 
$link = mysqli_connect("localhost", "root", ""); 
// Check connection 
if($link === false){ die("ERROR: Could not connect. " . mysqli_connect_error()); } 
// Attempt create database query execution 
$sql = "CREATE DATABASE EBookOdering"; 
if(mysqli_query($link, $sql))
{ echo "Database created successfully"; } 
Else
{ echo "ERROR: Could not able to execute $sql. " . mysqli_error($link); } 
// Close connection 
mysqli_close($link); ?>
