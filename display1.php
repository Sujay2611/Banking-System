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
                <th>IFSC CODE</th>
                <th>Branch number</th>
                <th>Location</th>
            </tr>
            <?php
            $conn=mysqli_connect("localhost","root","","bank_project");
            if($conn->connect_error){
                die("Connection failed:".$conn->connect_error);
            }

            $sql="SELECT * From branch";
            $result=$conn->query($sql);
            if($result->num_rows > 0){
                while($row=$result->fetch_assoc()){
                    echo "<tr><td>".$row["IFSC_CODE"]."</td><td>".$row["Branch_number"]."</td><td>".$row["Location"]."</td></tr>";
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