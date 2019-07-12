<!DOCTYPE html>
<html>
    <head>
        <title>Customer Table</title>
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
                <th>Customer id number</th>
                <th>Name</th>
                <th>Age</th>
                <th>Salary</th>
                <th>Address</th>
                <th>Job</th>
            </tr>
            <?php
            $conn=mysqli_connect("localhost","root","","bank_project");
            if($conn->connect_error){
                die("Connection failed:".$conn->connect_error);
            }

            $sql="SELECT * From customer";
            $result=$conn->query($sql);
            if($result->num_rows > 0){
                while($row=$result->fetch_assoc()){
                    echo "<tr><td>".$row["Customer_id_number"]."</td><td>".$row["Customer_name"]."</td><td>".$row["Customer_age"]."</td><td>".$row["Customer_salary"]."</td><td>".$row["Customer_address"]."</td><td>".$row["Customer_job"]."</td></tr>";
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