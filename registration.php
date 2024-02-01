<?php
if(isset($_POST['submit'])){
    $name=$_POST[name];
    $uname=$_POST[uname];
    $mobile=$_POST[mobile];
    $email=$_POST[email];
    $password=$_POST[password];
    $cpassword=$_POST[cpassword];
}    
    $con=mysql_connect("localhost","root");
    $db=mysql_selectdb("lms");
    $query="INSERT INTO lms_data(no,name,uname,mobile,email,password,cpassword)
    values('0','$name','$uname',$mobile,'$email','$password','$cpassword')";
    $cmd=mysql_query($query,$con);

    if($cmd) 
        echo '<script>alert("Welcome to Geeks for Geeks")</script>';
    else 
        echo "Record not Inserted ";

    header('Location:s1.php');
?>