<?php

$link = mysqli_connect("localhost", "root", "", "bank_project");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$Customer_id_number = mysqli_real_escape_string($link, $_REQUEST['Customer_id_number']);
$sql="SELECT * From customer";
$result=$link->query($sql);
$present=FALSE;
if($result->num_rows > 0){
    while($row=$result->fetch_assoc()){
        if($row["Customer_id_number"]===$Employee_id)
        {
            echo $row["Customer_id_number"]." ".$row["Customer_name"]." ".$row["Customer_age"]." ".$row["Customer_salary"]." ".$row["Customer_address"]." ".$row["Customer_job"];
            $present=TRUE;
        }
        
    }
    if($present===FALSE)
    {
        echo "The input value of primary key not present in the table";
    }
}
else
    {
        echo "Table contains 0 rows";
    }
mysqli_close($link);
?>