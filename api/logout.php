<?php 
require '../admin/connection.php';
$_SESSION = [];
session_unset();
session_destroy();

header("Location: ../index.html");
?>