<?php


session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: http://localhost/superstore-main"); // Redirecting To Home Page
}
?>


