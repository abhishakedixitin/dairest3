<?php


include 'connection.php';
if(isset ($_GET['deleteid'])){
    $deleteid = $_GET['deleteid'];
    $sql = "DELETE FROM users WHERE ID = '{$deleteid}'";
    $result = $conn->query($sql) or die(mysqli_error());
}
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

 echo "<table border=5px solid; bgcolor='white' width=100%; height=50%; cellpadding=20%>";
 echo "<tr>";
 	echo "<th>ID</td>";
    echo "<th>User_Type</td>";
 	echo "<th>USERNAME</td>";
 	echo "<th>PASSWORD</td>";
 	echo "<th>MOBILE</td>";
 	echo "<th>EMAIL</tsssd>";
 	echo "<th>ACTION</th>";
 while($row = $result->fetch_assoc()) {
 	echo "<tr>";
          echo "<td align=center>".$row["id"] ."</td>"
              ."<td align=center>".$row["u_acct_type"] ."</td>"
              ."<td align=center>".$row["username"] ."</td>"
              ."<td align=center>".$row["password"] ."</td>"
              ."<td align=center>".$row["mobile"] ."</td>"
              ."<td align=center>".$row["email"]."</td>" ;
          $user_id = $row["id"];
          echo "<td><a href='edituser.php?editid=$user_id'>Edit</a> | <a href='check-user-table.php?deleteid=$user_id'> Delete</a></td>";
     echo "</tr>";
    }
  echo "</table>";

$conn->close();
