<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Login.css">
        <title>Library Management System</title>
        <link rel="icon" href="logo.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <form method="post" action="s2.php">
        <div class="container">
            <p id="heading">
                Sign In
            </p> 
            <p>
                <i class="fa fa-user icon"></i>  Username
            </p>
            <input type="text" class="input" name="uname" placeholder="Username" required>
            <p>
                <i class="fa fa-lock icon"></i>  Password
            </p>
            <input type="password" class="input" name="password" id="myInput" placeholder="Password" required><br>
            <input type="checkbox" id="ck" onclick="myFunction()"> <p class="sp">Show Password</p>
            <p>
                <button type="submit" name="submit" onclick="myfunction()" value="submit">Login</button>
            </p>
            <p>
                Don't have an account? 
                <a href="registration_cli.php">Sign Up</a>
            </p>  
        </div>
        </form>

        <script>
            function myfunction() {
                alert("Login Successfully!");
            }

            function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
            }
        </script>
    </body>
</html>