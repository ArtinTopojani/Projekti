<?php include "dbConnection.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

<div class="wrapper">
    <div class="tittle-text">
        <div class="tittle login">Login</div>
        <div class="tittle login">Signup</div>

    </div>
    <div class="form-container">
        <div class="slide-controls">
            <input type="radio" name="slider" id="login" checked>
            <input type="radio" name="slider" id="signup">
            <label for="login" class="slide login">Login</label>
            <label for="signup" class="slide signup">Signup</label>
            <div class="slide-tab"></div>

        </div>
        <div class="form-inner">

            <?php

            if (isset($_POST['submit-login'])) {
                $password = $_POST['password'];
                $email = $_POST['email'];


                global $connection;
                $email = mysqli_real_escape_string($connection, $email);
                $password = mysqli_real_escape_string($connection, $password);

                $query = "SELECT * FROM users WHERE email = '{$email}' ";
                $selectUserQuery = mysqli_query($connection, $query);

                if (!$selectUserQuery) {
                    die("Query failed" . mysqli_error($connection));
                }

                while ($row = mysqli_fetch_array($selectUserQuery)) {
                    $userId = $row['id'];
                    $userPassword = $row['password'];
                    $userEmail = $row['email'];
                    $userPozicioni = $row['pozicioni'];
                }

                if ($userEmail == $email && $userPassword = $password && $userPozicioni == 'admin') {
                    header("Location: indexadmin.php");
                } elseif ($userEmail == $email && $userPassword = $password && $userPozicioni == 'user'){
                    header("Location: index.php");
                }
                else if ($userEmail == null && $userPassword == null) {
                    header("Location: login.php");
                }

                //nuk po qet mesazh qe gabim username ose password


            }


            ?>

            <form action="login.php" class="login" method="post">
                <div class="field">
                    <input type="text" placeholder="Email" id="email" name="email">
                </div>
                <div class="field">
                    <input type="password" placeholder="Password" id="password" name="password">
                </div>
                <div class="pass-link"><a href="#">Forgot password?</a></div>
                <div class="field">
                    <input type="submit" value="login" name="submit-login">
                </div>
            </form>

            <!-- Signup -->
            <?php
            if (isset($_POST['submit-signup'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];

                if (!empty($email) && !empty($password)) {
                    global $connection;
                    $email = mysqli_real_escape_string($connection, $email);
                    $password = mysqli_real_escape_string($connection, $password);




                    $query = "INSERT INTO users (password, email, pozicioni) ";
                    $query .= "VALUES('{$password}', '{$email}', 'user')";
                    $registerUserQuery = mysqli_query($connection, $query);
                    if (!$registerUserQuery) die("QUERY FAILED" . mysqli_error($connection) . '' . mysqli_errno($connection));

                    $message = "Your Registration has been submited";
                } else $message = "Fields cannot be empty";


            } else $message = "";

            ?>

            <form action="login.php" class="signup" method="post">
                <div class="field">
                    <input type="text" placeholder="Email" name="email" id="email">
                </div>
                <div class="field">
                    <input type="password" placeholder="Password" name="password" id="password">
                </div>
                <!--                <div class="field">-->
                <!--                    <input type="password" placeholder="Confirm password" required>-->
                <!--                </div>-->
                <div class="pass-link"><a href="#">Forgot password?</a></div>
                <div class="field">
                    <input type="submit" value="Signup" name="submit-signup">
                </div>

            </form>
            <!-- End of Signup -->
        </div>
    </div>
</div>

<script src="login.js"></script>

</body>
</html>