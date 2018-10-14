  <?php

      $host="127.0.0.1";
      $username="UR16CS164";
      $password="UR16CS164";
      $db="crack";
$conn = new mysqli($host, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// echo "Connected successfully";



$sql = "SELECT name FROM users";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
 echo  $row["name"]."<br>";
}

$conn->close();
      ?>