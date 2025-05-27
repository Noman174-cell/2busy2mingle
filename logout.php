<?php 

session_start();
session_destroy();

unset($_SESSION['username']);
unset($_SESSION["time_log"]);

header("Location: ../../login-admin");

?>