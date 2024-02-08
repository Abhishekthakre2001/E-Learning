<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      margin: 0;
      padding: 0;
      overflow-x: hidden;
    }

    
    .topnav-right {
      overflow: hidden;
      background-color: #555;


    }

    .topnav-right a {
      float: left;
      color: #f2f2f2;
      text-align: left;
      padding-top: 20px;
      padding-bottom: 20px;
      padding-left: 30px;
      padding-right: 30px;
      font-size: 17px;
      margin-left: 0%;
      text-decoration: none;
    }

    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }

    .topnav a.active {
      background-color: #555;
      color: white;
    }

    .topnav-right {
      float: right;
    }

    h1 {
      margin-left: 300px;
      margin-top: 150px;
    }

    pre {
      margin-left: 300px;
      font-family: Arial, Helvetica, sans-serif;
      font-size: 20px;
      color: black;
    }

    @media screen and (max-width:700px) {
      pre {
        margin: 0px 35px;
        display: grid;
        justify-content: center;
      }
    }

    .fixed-header {
      width: 100%;
      position: fixed;
      background-image: url("./image/pic1.jpg");
      background-image: url("./image/pic1.jpg");
      box-sizing: border-box;
      color: #fff;
      top: 0;
    }

    .heading {
      font-size: 50px;
      font-family: cursive;
      margin-left: 100px;
      color: #555;
    }


    .sidebar {
      margin-top: 130px;
      padding: 0;
      width: 200px;
      background-color: #f1f1f1;
      position: fixed;
      height: 100%;
      overflow: auto;
    }

    .sidebar a {
      display: block;
      color: black;
      padding: 16px;
      text-decoration: none;
    }

    .sidebar a.active {
      background-color: #555;
      color: white;
      height: 70px;
    }

    .sidebar a:hover:not(.active) {
      background-color: #555;
      color: white;
    }

    div.content {
      margin-left: 200px;
      padding: 1px 16px;
      height: 1000px;
    }

    @media screen and (max-width: 700px) {
      .sidebar {
        width: 100%;
        height: auto;

        position: fixed;
      }

      .sidebar a {
        float: left;
      }

      div.content {
        margin-left: 0;
      }

      pre {
        margin: 0px 35px;
      }
    }

    @media screen and (min-width: 300px) and (max-width: 450px) {
      .topnav-right a {
        padding: 20px 10px;
      }
    }
    @media screen and (min-width: 300px) and (max-width: 850px) {
     video{
      width:100%;
      padding:0 10px;
      left:0px!important;
      right:0px!important;
     }
    }

    @media screen and (max-width: 400px) {
      .sidebar a {
        text-align: center;
        float: none;
        display: inline-flex;
      }
    }
    video{
      position:absolute;
      top:40%;
      left:30%;
      right:30%;
    }
    .b{
        display:flex;
        justify-content:center;
    }
  </style>

</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">

  <div class="fixed-header">
    <div class="heading">
      E-learning
    </div>
    <div class="topnav-right">
      <a href="student_video_library.php">VIDEO</a>
      <a href="student_notes.php">NOTES</a>
      <a href="index.html">LOGOUT</a>
    </div>
  </div>
  <!-- <div class="sidebar">
    <a href="stud_java_navi.php">Features of Java</a>
    <a href="stud_java_navi.php">Java Variables</a>
    <a href="stud_java_navi.php">Data Types</a>
    <a href="stud_java_navi.php">OOPs Concepts</a>
  </div> -->
  <div class="sidebar">
  <a href="PHP_Operators.php">PHP</a>
  <a href="PHP_Operators.php">Java Variables</a>
  <a href="PHP_Operators.php">Data Types</a>
  <a href="PHP_Operators.php">OOPs Concepts</a>
</div>
   
    <div class="b">
    <h1>VIDEO LIBRARY</h1>
    <?php
    Include('connection.php');
    $mysql = "SELECT Path, videoname FROM php_video"; 
    $result = $conn->query($mysql);
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $videoPath = $row['Path'];
            $topic = $row['videoname'];  
            echo "<div class='video-container'>";
            echo "<video width='600' height='300' controls>";
            echo "<source src='$videoPath' type='video/mp4'>";
            echo "</video>";
            echo "<h3>$topic</h3>";
            echo "</div>";
        }
    }
    $conn->close();
    ?>
</div>
</body>

</html>