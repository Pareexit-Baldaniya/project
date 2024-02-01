<?php
    session_start();
    session_destroy();
    header("Location:s1.php");
?>