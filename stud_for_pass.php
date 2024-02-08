<html>
    <head>
        <style>
body{
    background-image: url("./image/pic3.jpg");
    text-align: center;
    margin-top: 500px;
    font-size:30px;
}
        </style>
    </head>
    <body>
        <?php
// Database connection settings
Include('connection.php');
// Step 1: Collect the username or email address from the user
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $E_mail = $_POST["E_mail"];

    // Step 2: Verify if the provided username or email exists in the database
    $sql = "SELECT Password FROM stud_registeration WHERE E_mail = '$E_mail'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        // Retrieve the password from the database
        $row = $result->fetch_assoc();
        $Password = $row["Password"];

        // Display the forgotten password to the user
        
         echo "Your password is: " . $Password;
        
        
    } else {
        // No user found with the provided username or email
        echo "User not found.";
    }
}
?>
 </body>
</html>