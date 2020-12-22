<?php
    session_start();
    $_SESSION['isLoggedIn']=$_GET['isLoggedIn'];
    header("Location: index.php");
?>