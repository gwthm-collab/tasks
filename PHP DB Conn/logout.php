<?php
    session_start();
    session_destroy();
    require_once("db.php");
    mysqli_close($conn); 
    header("Location:index.php");
?>