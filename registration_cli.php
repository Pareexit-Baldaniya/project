<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="registration.css">
        <title>Library Management System</title>
        <link rel="icon" href="logo-1.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    <form method="post" action="registration.php">
        <div class="container">
            <p id="heading">
                Registration
            </p>
            <p>
             <i class="fa fa-user icon"></i> Full Name
            </p>
            <input type="text" class="input" name="name" placeholder="Name" required>
            <p>
                <i class="fa fa-user icon"></i> Username
            </p>
            <input type="text" class="input" name="uname" placeholder="Username" required>
            <p>
             <i class="fa fa-mobile icon"></i> Mobile No.
            </p>
            <input type="tel" class="input" name="mobile" placeholder="Mobile No" pattern="^\d{10}$" 
            title="Enter 10 digit mobile number." required>
            <p>
                <i class="fa fa-envelope icon"></i> Email
            </p>
            <input type="email" class="input" name="email" placeholder="Email" required>
            <p>
                <i class="fa fa-lock icon"></i> Password
            </p>
            <input type="password" class="input" name="password" placeholder="Password"
            pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$" id="myInput" required><br>
            <input type="checkbox" id="ck" onclick="myFunction()"> <p class="sp">Show Password</p>
            <p>
                <i class="fa fa-lock icon"></i> Confirm Password
            </p>
            <input type="password" class="input" name="cpassword" placeholder="Confirm Password" 
            pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$" id="Input" required><br>
            <input type="checkbox" id="ck" onclick="myfunction()"> <p class="sp">Show Password</p>
            <p>
                <button type="submit" name="submit" value="submit">Sign Up</button>
            </p>
            <p>
                Already have an account? 
                <a href="s1.php">Login</a>
            </p>    
        </div>
        </form>

        <script>
            function myFunction() {
                alert("Hello! I am an alert box!");
            }

            function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
            }

            function myfunction() {
            var x = document.getElementById("Input");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
            }
        </script>
    </body>
</html>