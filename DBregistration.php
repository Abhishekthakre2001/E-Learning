<?php
    Include('connection.php');
    if(ISSET($_POST['login'])){
        $Name=$_POST['Name'];
        $Class=$_POST['Class'];
        $mobile No=$_POST['mobile No'];
        $E-mail=$_POST['E-mail'];
        $Password=$_POST['Password'];
        
        
    }
 
        mysqli_query($conn, "INSERT INTO `student registration` VALUES('$Name', '$Class', '$mobile No', '$E-mail', '$Password',)") or die(mysqli_error());
        echo "<center><h1 class='text-success'>well come $username</h1></center>";
 
        echo "<center><h1 class='text-success'>Successfully registered!</h1></center>";
    
?>

