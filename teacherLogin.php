<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            background-image: url("/absolute/path/to/image/pic1.jpg");
        }
    </style>
</head>
<body>

<?php
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $E_mail = $_POST["E_mail"];
    $Password = $_POST["Password"];

    $stmt = $conn->prepare("SELECT * FROM teacher_registration WHERE E_mail = ? AND Password = ?");
    $stmt->bind_param("ss", $E_mail, $Password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        session_start();
        $_SESSION["E_mail"] = $E_mail;
        echo "<script>alert('Login successful'); window.location = 'navigationbar.html';</script>";
    } 
    else {
        echo "<script>alert('Enter correct username and password'); window.location = 'teacherLogin.html';</script>";
    }

    $stmt->close();
    $conn->close();
}
?>

</body>
</html>
