<?php
session_start();
echo "logging you out pls wait.....";

session_destroy();
header("Location: /FORUM PROJECT ")
?>