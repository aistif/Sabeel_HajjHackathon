<?php
    session_start();
    unset($_SESSION['usename']);
    session_destroy();
        header("location: ../index.php");
?>