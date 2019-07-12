<?php

$link = mysqli_connect("localhost", "root", "", "bank_project");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 


$IFSC=$_POST['IFSC'];
$M="$IFSC";
$sql= "DELETE FROM branch WHERE IFSC_CODE='$IFSC'";
if($link->query($sql)===TRUE){
    echo "tuple Deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


mysqli_close($link);
?>