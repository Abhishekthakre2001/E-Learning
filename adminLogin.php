<?php
 Include('connection.php');
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $Admin_id = $_POST["Admin_id"];
        $Admin_password= $_POST["Admin_password"];

        $stmt = $conn->prepare("SELECT * FROM admin_login WHERE Admin_id = ? AND Admin_password = ?");
        $stmt->bind_param("ss", $Admin_id, $Admin_password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            session_start();
            $_SESSION["Admin_id"] = $Admin_id;
            echo "<script>
                    $(document).ready(function() {
                      $('#myModal').modal('show');
                    });
                  </script>";
            header("location: teacherRegistration.html");
        } else {
            header("location: adminLogin.html"); 
            echo "<script>
                    $(document).ready(function() {
                      alert('Enter correct username and password');
                    });
                  </script>";
        }

        $stmt->close();
        $conn->close();
    }
  ?>
