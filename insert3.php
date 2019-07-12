<?php

$link = mysqli_connect("localhost", "root", "", "bank_project");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$Department_id = mysqli_real_escape_string($link, $_REQUEST['Department_id']);
$Department_name = mysqli_real_escape_string($link, $_REQUEST['Department_name']);
$Department_location = mysqli_real_escape_string($link, $_REQUEST['Department_location']);
 

$sql = "INSERT INTO department (Department_id,Department_name ,Department_location) VALUES ('$Department_id', '$Department_name', '$Department_location')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

mysqli_close($link);
?>