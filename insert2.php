<?php

$link = mysqli_connect("localhost", "root", "", "bank_project");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$Employee_id = mysqli_real_escape_string($link, $_REQUEST['Employee_id']);
$Employee_name = mysqli_real_escape_string($link, $_REQUEST['Employee_name']);
$Address = mysqli_real_escape_string($link, $_REQUEST['Address']);
$Date_of_Birth = mysqli_real_escape_string($link, $_REQUEST['Date_of_Birth']);
$Qualifications = mysqli_real_escape_string($link, $_REQUEST['Qualifications']);
$Position = mysqli_real_escape_string($link, $_REQUEST['Position']);
$Salary = mysqli_real_escape_string($link, $_REQUEST['Salary']);
$Start_Date = mysqli_real_escape_string($link, $_REQUEST['Start_Date']);
$Gender = mysqli_real_escape_string($link, $_REQUEST['Gender']);
$ifsc = mysqli_real_escape_string($link, $_REQUEST['ifsc']);
$dept_id = mysqli_real_escape_string($link, $_REQUEST['dept_id']);

 

$sql = "INSERT INTO employee (Employee_id,Employee_name,Address,Date_of_Birth,Qualifications,Position,Salary,Start_Date,Gender,ifsc_code,dept_id) VALUES ('$Employee_id', '$Employee_name', '$Address','$Date_of_Birth','$Qualifications','$Position','$Salary','$Start_Date','$Gender','$ifsc','$dept_id')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
mysqli_close($link);
?>