<?php
// Start a session and destroy it to logout the user
session_start();
session_destroy();

// Redirect to the login page
echo "<script>alert('successfully logout')</script>";
header("Location: studentLogin.html");
exit;