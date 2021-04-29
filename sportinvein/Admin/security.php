<?php
session_start();
include 'database/dbconfig.php';
if ($con) {
    // echo "Database Connected";
} else {
    header('Location: database/dbconfig.php');
}

if (!$_SESSION['username']) {
    header('Location: login.php');
}
?>