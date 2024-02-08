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
    
    margin-top: 150px;
  }
  pre {
                  /* Adds a scrollbar when necessary */
        }

        @media screen and (max-width: 600px) {
            /* Adjust styles for smaller screens if needed */
            pre {
                font-size: 14px;  /* Example: Reduce font size for smaller screens */
            }
        }
  pre{
    white-space: pre-wrap;  /* Allows the text to wrap to the next line */
            word-wrap: break-word;  /* Allows long words to break and wrap */
            overflow: auto; 
    margin-left: 300px;
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
  margin-top: 107px;
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
    margin-top:140px;
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

    </style>
  
  </head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">
<?php
include('./student_php.html');
?>
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
  <!-- <div class="cont">
  <nav>
    <ul>
      <li><a href="java.php">Features of Java</a></li>
      <li><a href="java.php">Java Variables</a></li>
      <li><a href="java.php">Data Types </a></li>
      <li><a href="java.php">OOPs Concepts</a></li>
    </ul>
  </nav>
</div> -->

<div class="sidebar">
  <a href="#">PHP</a>
  <a href="#">Java Variables</a>
  <a href="#">Data Types</a>
  <a href="#">OOPs Concepts</a>
</div>
</body>
</html>

