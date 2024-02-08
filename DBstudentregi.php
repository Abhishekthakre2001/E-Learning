<?php
 Include('connection.php');

$sql = "INSERT INTO Student registration (Name, Class,Mobile No.,E-mail,Password)
VALUES ('', '', '','','')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>