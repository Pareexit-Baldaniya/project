<?php
    session_start();

    if (strcmp($_POST['uname'],'student')==0 && 
        strcmp($_POST['password'],'stu123')==0)
    {
        $_SESSION[uname]=$_POST[uname];
        header('Location:s3.php');
    }
    else

    header('Location:s1.php');
?>