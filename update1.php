
<?php

$link = mysqli_connect("localhost", "root", "", "bank_project");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$IFSC = mysqli_real_escape_string($link, $_REQUEST['IFSC']);
$Branchnumber = mysqli_real_escape_string($link, $_REQUEST['branchno']);
$sql="UPDATE branch SET Branch_number='$Branchnumber' WHERE IFSC_CODE='$IFSC'";
if(mysqli_query($link, $sql)){
    echo "Branch number updated successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
?>