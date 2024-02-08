<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    body{
        background-image: url("./image/slogin.jpg");
      background-size: cover;
      width:100%;
        height:100vh;
      background-repeat: no-repeat;
      position: fixed;
    }
    @media only screen and (min-width: 768px) and (max-width: 1024px) {
      body {
        position: relative;
        width:100%;
        height:100vh;
      }
    }
    @media only screen and (min-width: 1000px) and (max-width: 1800px) {
      body {
        position: relative;
        width:100%;
        height:100vh;
      }
    }
    @media only screen and (min-width: 000px) and (max-width: 770px) {
      body {
        position: relative;
        width:100%;
        height:100vh;
      }
    }
    .btn{
        background: #80bfff;
        font-size:20px;
        height:50px;
    }
    .modal-body{
        justify-content: center;
    display: flex;
    }
    </style>
<body>

<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
          <h3>Registration successfully.</h3>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="redirectToLogin()">Click here to login !</button>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  function redirectToLogin() {
    window.location.href = "studentLogin.html";
  }
</script>
<?php
// Include the database connection file
include('connection.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get values from the form
    $Name = $_POST["Name"];
    $E_mail = $_POST["E_mail"];
    $Password = $_POST["Password"];

    // Preparing and executing the SQL query
    $stmt = $conn->prepare("INSERT INTO stud_registeration (Name, E_mail, Password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $Name, $E_mail, $Password);

    if ($stmt->execute()) {
        // Redirecting to the student login page
        echo "<script>
              $('#myModal').modal('show');
              </script>";
        exit;
    } else {
        echo "<script>
              $('#errorModal').modal('show');
              </script>";
    }

    // Closing the statement and database connection
    $stmt->close();
    $conn->close();
}
?>


</body>
</html>
