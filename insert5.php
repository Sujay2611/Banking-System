<?php

$link = mysqli_connect("localhost", "root", "", "bank_project");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$Customer_account_number = mysqli_real_escape_string($link, $_REQUEST['Customer_account_number']);
$Account_name = mysqli_real_escape_string($link, $_REQUEST['Account_name']);
$Account_type = mysqli_real_escape_string($link, $_REQUEST['Account_type']);
$Account_balance = mysqli_real_escape_string($link, $_REQUEST['Account_balance']);
$Account_start_date = mysqli_real_escape_string($link, $_REQUEST['Account_start_date']);
$Account_interest_rate = mysqli_real_escape_string($link, $_REQUEST['Account_interest_rate']);
$IFSC = mysqli_real_escape_string($link, $_REQUEST['IFSC']);

$sql = "INSERT INTO account (Customer_account_number,Account_name,Account_type,Account_balance,Account_start_date,Account_interest_rate,IFSC) VALUES ('$Customer_account_number', '$Account_name', '$Account_type','$Account_balance','$Account_start_date','$Account_interest_rate','$IFSC')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>