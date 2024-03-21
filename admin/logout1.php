<?php
session_start();
session_destroy();
header("Location: http://localhost/superstore-main");
exit;
?>