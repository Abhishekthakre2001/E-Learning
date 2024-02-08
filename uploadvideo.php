<!DOCTYPE html>
<html>
<head>
    <style>
      body {
   
    /* Other background properties can be added if needed, such as background-size, background-repeat, etc. */
}

        .uploadvideo {
           top: 300px!important;
    position: relative;
    border:0px solid;
    box-shadow:10px 10px 20px;
    padding:35px;
    background-image: url("image/pic6.jpg");
}
        .videoinputfile {
            display: flex;
            width: 200px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #f9f9f9;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
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
            margin-left: 33%;
            margin-top:41%;
        }
        h2 {
            margin-top: 100px;
            
        }
        .video_upload{
            display: grid;
    justify-content: center;
    
        }
        @media screen and (max-width: 700px) {
        .uploadvideo{
            top:0px;
        }
        .video-container{
            margin-top:60%;
        }
        video{
            left: 22px!important;
    width: 90%;
    padding: 15px;
    top: 90%!important;
        }
  }
  video{
      position:absolute;
      top:90%;
     
      left:30%;
      right:30%;
    }
    </style>
</head>
<body>
    <?php
    include('./navi_java.php');
    ?>
    <div class="video_upload">
    
    <form class="uploadvideo" action="uploadvideo.php" method="post" enctype="multipart/form-data">
    <h2>UPLOAD VIDEO</h2>
        <input type="file" class="videoinputfile" name="video" value="video" require>
        <input type="text" class="videoinputfile" name="name" value="video" require><br>
        <button type="submit" class="uploadvideobutton" value="submit">UPLOAD</button>
    </form>
    </div>
    <?php
    Include('connection.php');
    $mysql = "SELECT Path, videoname FROM java_video"; 
    $result = $conn->query($mysql);
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $videoPath = $row['Path'];
            $topic = $row['videoname'];
    
            echo "<div class='video-container'>";
            echo "<h3>$topic</h3>";
            echo "<video width='400' height='200' controls preload='auto' data-setup='{}'>";
            echo "<source src='$videoPath' type='video/mp4'>";
            echo "</video>";
            echo "</div>";
        }
    }
    
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_FILES['video'])) {
            $video_name = $_POST["name"];
            $file_name = $_FILES['video']['name'];
            $file_tmp = $_FILES['video']['tmp_name'];
            $file_path = "uploadvideo-java/" . $file_name;
            
            if (move_uploaded_file($file_tmp, $file_path)) {
               
                $sql = $conn->prepare("INSERT INTO java_video (Name, Path, videoname) VALUES (?, ?, ?)");
                $sql->bind_param("sss", $file_name, $file_path, $video_name);
                if ($sql->execute()) {
                    echo "<h2>Video uploaded successfully.</h2>";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                $sql->close();
            } else {
                echo "<h2>Failed to upload video.</h2>";
            }
        } 
    }
    $conn->close();
    ?>
</body>
</html>
