<?php
 Include('connection.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $E_mail = $_POST["E_mail"];
    $Password = $_POST["Password"];

    $stmt = $conn->prepare("SELECT * FROM stud_registeration WHERE E_mail = ? AND Password = ?");
    $stmt->bind_param("ss", $E_mail, $Password);
    $stmt->execute();
    $result = $stmt->get_result();

    
    if ($result->num_rows === 1) {
        session_start();
        $_SESSION["E_mail"] = $E_mail;
       header("location: studentnavigationbar.html");
    } else {
        header("location: studentLogin.html"); 
        echo "<script>
        alert('enter correct username and password');
        </script>";
    }

    $stmt->close();
    $conn->close();
}
?>