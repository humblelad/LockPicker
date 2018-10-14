  <?php

      $host="127.0.0.1";
      $username="UR16CS164";
      $password="UR16CS164";
      $db="crack";
$na=$_POST['nam'];
// Create connection
$conn = new mysqli($host, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO users (name)
VALUES ('$na')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>