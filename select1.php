<?php

$link = mysqli_connect("localhost", "root", "", "bank_project");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$IFSC = mysqli_real_escape_string($link, $_REQUEST['IFSC']);
$sql="SELECT * From branch";
$result=$link->query($sql);
$present=FALSE;
if($result->num_rows > 0){
    while($row=$result->fetch_assoc()){
        if($row["IFSC_CODE"]===$IFSC)
        {
            echo $row["IFSC_CODE"]." ".$row["Branch_number"]." ".$row["Location"];
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