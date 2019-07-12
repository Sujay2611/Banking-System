<?php

$link = mysqli_connect("localhost", "root", "", "bank_project");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 


$Customer_id_number=$_POST['Customer_id_number'];
$M="$Customer_id_number";


$sql2="SELECT * FROM customer WHERE (Customer_id_number='$Customer_id_number')";
$sql1= "DELETE FROM customer WHERE (Customer_id_number='$Customer_id_number') ";
$result1=$link->query($sql2);
$result=$link->query($sql1);
if($result1->num_rows!==0)
{
    if($result1->num_rows==1)
    {
        echo "Tuple deleted successfully.<br>";
        echo "Customer id number deleted is $Customer_id_number.";
    } 
}
else
{
    echo "Given Customer id number is not in the table";
}

mysqli_close($link);
?>