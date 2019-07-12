<?php

$link = mysqli_connect("localhost", "root", "", "bank_project");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$Employee_id = mysqli_real_escape_string($link, $_REQUEST['Employee_id']);
$sql="SELECT * From employee";
$result=$link->query($sql);
$present=FALSE;
if($result->num_rows > 0){
    while($row=$result->fetch_assoc()){
        if($row["Employee_id"]===$Employee_id)
        {
            echo $row["Employee_id"]." ".$row["Employee_name"]." ".$row["Address"]." ".$row["Date_of_Birth"]." ".$row["Qualifications"]." ".$row["Position"]." ".$row["Salary"].$row["Start_Date"]." ".$row["Gender"]." ".$row["ifsc_code"]." ".$row["dept_id"];
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