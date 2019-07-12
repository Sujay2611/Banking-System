<?php

$link = mysqli_connect("localhost", "root", "", "bank_project");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$IFSC = mysqli_real_escape_string($link, $_REQUEST['IFSC']);
$Branchno = mysqli_real_escape_string($link, $_REQUEST['Branchno']);
$location = mysqli_real_escape_string($link, $_REQUEST['location']);
 

$sql = "INSERT INTO branch (IFSC_CODE, Branch_number,Location) VALUES ('$IFSC', '$Branchno', '$location')";
if($IFSC==NULL || $Branchno== NULL|| $location== NULL)
{
    echo "Enter all the details";
}
else
{
    if(mysqli_query($link, $sql)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}

mysqli_close($link);
?>