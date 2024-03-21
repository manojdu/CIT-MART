<?php
session_start(); // Start the session

// Check if the session is destroyed successfully
if(session_destroy()) {
    // Redirect the user to the home page
    header("Location: http://localhost/superstore-main");
}
?>
