<!DOCTYPE html>
<html>
<head>
 <title>Table with database</title>
 <style>
  table {
   border-collapse: collapse;
   width: 100%;
   color: black;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     } 
  th {
   background-color: #588c7e;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
 </style>
</head>
<body>
 <table>
 <tr>
  <th>Id</th> 
  <th>First Name</th> 
  <th>Last Name</th>
  <th>Gender</th> 
  <th>Email</th> 
  <th>Address</th> 
  <th>Mobile No</th> 
  
 </tr>
 <?php
$conn = mysqli_connect("localhost", "root", "", "testing");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT id, first_name, last_name, gender, email, address, mobile_no FROM tbl_login";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["first_name"] . "</td><td>" .$row["last_name"]. "</td><td>" .$row["gender"]. "</td><td>" .$row["email"]."</td><td>"
.$row["address"]. "</td><td>" .$row["mobile_no"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>