<!DOCTYPE html>
<html>
    <head>
        <title>Branch Table</title>
        <style>
            table{
                width:100%;
                color:#588c7e;
                font-size:25px;
                text-align:left;
            }
            th{
                background-color:#588c7e;
                color:white;
            }
        </style>    
    </head>
    <body>
        <table>
            <tr>
                <th>Employee id</th>
                <th>Employee name</th>
                <th>Address</th>
                <th>Date of Birth</th>
                <th>Qualifications</th>
                <th>Position</th>
                <th>Salary</th>
                <th>Start Date</th>
                <th>Gender</th>
                <th>IFSC CODE</th>
                <th>Dept id</th>
            </tr>
            <?php
            $conn=mysqli_connect("localhost","root","","bank_project");
            if($conn->connect_error){
                die("Connection failed:".$conn->connect_error);
            }

            $sql="SELECT * From employee";
            $result=$conn->query($sql);
            if($result->num_rows > 0){
                while($row=$result->fetch_assoc()){
                    echo "<tr><td>".$row["Employee_id"]."</td><td>".$row["Employee_name"]."</td><td>".$row["Address"]."</td><td>".$row["Date_of_Birth"]."</td><td>".$row["Qualifications"]."</td><td>".$row["Position"]."</td><td>".$row["Salary"]."</td><td>".$row["Start_Date"]."</td><td>".$row["Gender"]."</td><td>".$row["ifsc_code"]."</td><td>".$row["dept_id"]."</td></tr>";
                }
                echo "</table>";
            }
            else
            {
                echo "Table contains 0 rows";
            }
            $conn->close();
            ?>
        </table>
    </body>
</html>