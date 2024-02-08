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
  /* nav {
    width: 15vw!important;
    height: 100vh;
    background-color: #b9b6b6ec;
    position:fixed;
    margin-top: 128px;
    height: 150vh;
    }
    @media screen and (min-width: 300px) and (max-width: 699px) {
    
    nav {
        width: 100%; 
    }
}

@media screen and (min-width: 700px) and (max-width: 1500px) {
  
    nav {
        width: 10%; 
    }
} */


    .cont{
      display: flex;
      flex-direction: column;
    }
    ul {
   margin: 10px;
    padding: 25px;
    }
  li {
    position: relative;
    list-style: none;
  }
  a {
    display: block;
    color:white;
    font-size: 17px;
    text-decoration: none;
    padding: 10px;
    transition: background-color 0.3s;
  }
  a:hover {
    background-color: #555;
  }
  
  
  .topnav-right{
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
   
  }
  @media screen and (min-width: 300px) and (max-width: 450px) {
    .topnav-right a{
      padding: 20px 10px;
    }
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
    width:max-content;
  }
  h1{
    margin-left: 300px;
    margin-top: 150px;
  }
  pre{
    margin-left: 216px;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 20px;
    color: black;
  }
  .fixed-header{
          width: 100%;
          position: fixed;   
          background-image: url("./image/pic1.jpg");     
          background-image: url("./image/pic1.jpg");
          box-sizing: border-box;
          color: #fff;
          top: 0;
}
      .heading{
        font-size: 50px;
        font-family: cursive;
        margin-left: 100px;
        color:#555 ;
      }



      .sidebar {
  margin-top: -22px;
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
  background-color: #04AA6D;
  color: white;
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
    /* bottom:-470px; */
    position: fixed;
  }
  pre{
    margin-left:15px;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
    display: inline-flex;
  }
}
.notes-container{
    display:flex;
    justify-content:center;
    padding:50px;
}
.notes_student{
    display: flex;
    justify-content: center;
    position: absolute;
    margin-top: -55px;
}
@media screen and (min-width:350px) and (max-width:850px){
    .notes_student {
    margin-top: 43px;
}
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


<div class="sidebar">
  <a href="PHP_Operators.php">PHP</a>
  <a href="PHP_Operators.php">Java Variables</a>
  <a href="PHP_Operators.php">Data Types</a>
  <a href="PHP_Operators.php">OOPs Concepts</a>
</div>
<h1>NOTES</h1>
<?php
    Include('connection.php');
    $mysql = "SELECT file_Path, file_name FROM php_notes"; 
    $result = $conn->query($mysql);
    
    if ($result === false) {
        // Add error handling for the SQL query
        die("Error executing SQL query: " . $conn->error);
    }

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $notesPath = $row['file_Path'];
            $topic = $row['file_name'];
    
            echo "<div class='notes-container'>";
            echo "<h3 class='notes_student'>$topic</h3>";
            
            if (file_exists($notesPath)) {
                // Check if the file exists before embedding
                echo "<iframe src=\"$notesPath\" width=\"900px\" height=\"500px\" class=\"notes\" type=\"application/pdf\"></iframe>";
            } else {
                echo "File not found: $notesPath";
            }

            echo "</div>";
        }
    } else {
        echo "No records found in the database.";
    }

    $conn->close();
?>


</body>
</html>
    
