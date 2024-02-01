<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Library Management System</title>
        <link rel="icon" href="logo-1.png" type="image/x-icon">
    </head>
    <body>
        <form method="POST" action="s4.php">
        <?php
            session_start();
            if (isset($_SESSION[uname]))
            {}
            else
            header("Location:s1.php");
        ?>
        <div class="nav">
            <div class="searchbar">
                <input type="text" placeholder="Search Book" name="search">
            </div>

            <div class="login">
                <button type="submit" name="submit" value="logout">Logout</button>
            </div>
        </div>

        <div class="verticle">
            <a onclick="location.href='index.php'">
                <img src="dashboard.png" id="dashboard" width="50px" height="50px">
            </a>

            <a onclick="location.href='setting.php'">
                <img src="setting.png" id="setting" width="35px" height="35px">
            </a>
        </div>

        <div class="logo">
            <p><b>Logo.com</b></p>
        </div>

        <div class="container">
            <p id="uname">
                <?php 
                    echo "Welcome ".$_SESSION[uname]."!<br>";
                ?>
            </p>

            <p id="t_books">
                Total Books<br><br>
                0
            </p>

            <p id="ava_books">
                Available Books<br><br>
                0
            </p>

            <p id="ovrd_books">
                Overdue Books<br><br>
                0
            </p>

            <p id="pre_books">
                Pre-issued Books<br><br>
                0
            </p>

            <div>
                <p id="i-b">
                    Books Issued
                    <button id="a_sub" type="submit" onclick="location.href='addbook.php'">Add Book</button>
                    <br>
                    <table class="b-i">
                        <tr>
                            <th>
                                User Name
                            </th>
                            <th>
                                Book Name
                            </th>
                            <th>
                                Issue Date
                            </th>
                            <th>
                                Return Date
                            </th>
                        </tr>
                    </table>
                </p>
            </div>
            
            <p id="o-b">
                Users List
                <button id="a_user" type="submit" onclick="location.href='addbook.php'">Add User</button>
                <table class="u-l">
                    <tr>
                        <th>
                            User ID
                        </th>
                        <th>
                            User Name
                        </th>
                        <th>
                            Book Name
                        </th>
                        <th>
                            Issue Date
                        </th>
                        <th>
                            Return Date
                        </th>
                    </tr>
                </table>
            </p>
        </div>
        </form>
    </body>
</html>