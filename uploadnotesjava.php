<!DOCTYPE html>
<html>
    <head>
        <style>
            body {
   
   /* Other background properties can be added if needed, such as background-size, background-repeat, etc. */
}
/* top: 250px;
    position: relative;
    margin: 0 auto;
    border: 0px solid;
    box-shadow: 10px 10px 20px;
    padding: 35px;
    align-items: center;
    margin: 0 auto;
    background-image: url(image/pic6.jpg);
    justify-content: center;
    width: 18%; */
  .uploadvideo {
           top: 250px;
           width: 310px;
           margin: 0 auto;
   position: relative;
   margin:0 auto;
   border:0px solid;
   box-shadow:10px 10px 20px;
   padding:35px;
   background-image: url("image/pic6.jpg");
}
@media screen and (min-width:700px) and (max-width: 1450px){
    .uploadvideo{
        width:290px;
    }
}
@media screen and (min-width:200px) and (max-width:699px) {
    .uploadvideo{
        width:280px;
        top:300px;
    }
    
}
       .uploadvideobutton {
           display: block;
           width: 200px;
           height: 30px;
           border: none;
           border-radius: 5px;
           background-color: grey;
           color: white;
           font-size: 16px;
           cursor: pointer;
           transition: background-color 0.3s ease;
       }
       .uploadvideobutton:hover {
           background-color: black;
       }
       .video-container {
           margin-left: 450px;
       }
       h2 {
           margin-top: 100px;
           
       }
       .video_upload{
           display: grid;
   justify-content: center;
   

       }
        </style>
    </head>
<body>
    <?php
    include('./navi_java.php');
    ?>
    <form class="uploadvideo" action="#" method="post" enctype="multipart/form-data">
    <h2>UPLOAD NOTES</h2>
        <input type="file" class="videoinputfile" name="video" value="video" require>
        <input type="text" class="videoinputfile" name="name" value="video" require><br>
        <button type="submit" class="uploadvideobutton" value="submit">UPLOAD</button>
    </form>

    <?php
    Include('connection.php');
    $mysql = "SELECT file_Path, file_name FROM java_notes"; 
    $result = $conn->query($mysql);
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $notesPath = $row['file_Path'];
            $topic = $row['file_name'];
    
            echo "<div class='video-container'>";
            echo "<h3>$topic</h3>";
            echo "<embed src=\"$notesPath\" width=\"900px\" height=\"500px\" class=\"notes\" type=\"application/pdf\">";
            echo "</div>";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES['video'])) {
            $video_name = $_POST["name"];
            $file_name = $_FILES['video']['name'];
            $file_tmp = $_FILES['video']['tmp_name'];
            $file_path = "javanotes/" . $file_name;
            
            if (move_uploaded_file($file_tmp, $file_path)) {
                $sql = "INSERT INTO java_notes (Name, file_Path, file_name) VALUES ('$file_name', '$file_path', '$video_name')"; 
                if ($conn->query($sql) === true) {
                    echo "<h2>notes uploaded successfully.</h2>";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                echo "<h2>Failed to upload notes.</h2>";
            }
        } 
    
    $conn->close();
    ?>
</body>
</html>
