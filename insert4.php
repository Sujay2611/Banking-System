<?php

$link = mysqli_connect("localhost", "root", "", "bank_project");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$Customer_id_number = mysqli_real_escape_string($link, $_REQUEST['Customer_id_number']);
$Customer_name = mysqli_real_escape_string($link, $_REQUEST['Customer_name']);
$Customer_age = mysqli_real_escape_string($link, $_REQUEST['Customer_age']);
$Customer_salary = mysqli_real_escape_string($link, $_REQUEST['Customer_salary']);
$Customer_address = mysqli_real_escape_string($link, $_REQUEST['Customer_address']);
$Customer_job = mysqli_real_escape_string($link, $_REQUEST['Customer_job']);
 

$sql = "INSERT INTO customer (Customer_id_number,Customer_name,Customer_age,Customer_salary,Customer_address,Customer_job) VALUES ('$Customer_id_number', '$Customer_name', '$Customer_age','$Customer_salary','$Customer_address','$Customer_job')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>