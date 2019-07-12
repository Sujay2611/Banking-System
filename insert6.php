<?php

$link = mysqli_connect("localhost", "root", "", "bank_project");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$Loan_number = mysqli_real_escape_string($link, $_REQUEST['Loan_number']);
$Loan_name = mysqli_real_escape_string($link, $_REQUEST['Loan_name']);
$Loan_type = mysqli_real_escape_string($link, $_REQUEST['Loan_type']);
$Loan_start_date = mysqli_real_escape_string($link, $_REQUEST['Loan_start_date']);
$Loan_due_date = mysqli_real_escape_string($link, $_REQUEST['Loan_due_date']);
$Loan_amount = mysqli_real_escape_string($link, $_REQUEST['Loan_amount']);
$Loan_interest_rate = mysqli_real_escape_string($link, $_REQUEST['Loan_interest_rate']);
$Loan_resultant_amount = mysqli_real_escape_string($link, $_REQUEST['Loan_resultant_amount']);
$ifsc_ = mysqli_real_escape_string($link, $_REQUEST['ifsc_']);

$sql = "INSERT INTO loan (Loan_number,Loan_name,Loan_type,Loan_start_date,Loan_due_date,Loan_amount,Loan_interest_rate,Loan_resultant_amount,ifsc_) VALUES ('$Loan_number', '$Loan_name', '$Loan_type','$Loan_start_date','$Loan_due_date','$Loan_amount','$Loan_interest_rate','$Loan_resultant_amount','$ifsc_')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>