<!DOCTYPE html>
<html>
<head>
    <style>
        .uploadnotes {
            margin-left: 300px;
        }
        .notesinputfile {
            display:flex;
            width: 200px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #f9f9f9;
            box-shadow: inset 0 1px 3px rgba(0,0,0,0.1);
        }
        .uploadnotesbutton {
            display: block;
            width: 200px;
            height: 30px;
            border:none;
            border-radius: 5px;
            background-color: grey;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .uploadnotesbutton:hover {
            background-color: black;
        }
        .video-container {
            margin-left: 450px;
        }
        h2 {
            margin-top: 100px;
            margin-left: 300px;
        }
    </style>
</head>
<body>
<?php
include('./navigation.php');
?>
<h1>UPLOAD NOTES</h1>
<form class="uploadnotes" action="uploadnotes.php" method="post" enctype="multipart/form-data">
    <input type="file" class="notesinputfile" name="video" value="video"><br><br>
    <input type="text" class="notesinputfile" name="name" value="NOTES" placeholder="name"><br><br>
    <button type="submit" class="uploadnotesbutton" value="submit">UPLOAD</button>
</form>

<?php
 Include('connection.php');
$mysql = "SELECT file_Path, file_name FROM php_notes";
$result = $conn->query($mysql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $notesPath = $row['file_Path'];
        $topic = $row['file_name'];

        echo "<div class='video-container'>";
        echo "<h3>$topic</h3>";
        echo "<embed src='$notesPath' width='900px' height='500px' class='notes' type='application/pdf'>";
        echo "</div>";
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_FILES['video'])) {
        $notes_name = $_POST["name"];
        $file_name = $_FILES['video']['name'];
        $file_tmp = $_FILES['video']['tmp_name'];
        $file_path = "upload-notes/" . $file_name;

        if (move_uploaded_file($file_tmp, $file_path)) {
            $sql = "INSERT INTO php_notes (Name, file_Path, file_name) VALUES ('$file_name', '$file_path', '$notes_name')";
            if ($conn->query($sql) === true) {
                echo "<h2>NOTES uploaded successfully.</h2>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "<h2>Failed to upload</h2>";
        }
    }}
    ?>
        