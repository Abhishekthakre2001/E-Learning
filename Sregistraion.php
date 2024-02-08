<?php
    Include('connection.php');
    if(ISSET($_POST['submit']))
    {
        $Name=$_POST['Name'];
        $Class=$_POST['Class'];
        $mobile_No=$_POST['mobile_No'];
        $E_mail=$_POST['E_mail'];
        $Password=$_POST['Password'];
 
        mysqli_query($conn, "INSERT INTO `stud_registration` VALUES('$Name', '$Class', '$mobile_No', '$E_mail', '$Password')") or die(mysqli_error());
        echo "<center><h1 class='text-success'>well come $Name</h1></center>";
 
        echo "<center><h1 class='text-success'>Successfully registered!</h1></center>";
    }
?> 