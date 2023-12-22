<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include("components/component.php");
    include("components/header.php");

    $name = "";
    $email = "";
    $password = "";
    ?>

</head>

<body>


    <div class="background-container">
        <img src="public/background/webbackground.jpg" alt="">
        <?php
        include("components/nav.php");
        ?>
        <div class="container">
            <div class="form-container">
                <div class="form-image">
                    <img src="public\background\webdesign.jpg" alt="Login">

                </div>

                <div class="form-field">
                    <h1>Registration</h1>
                    <form method="POST" id="sub">
                        <div class="input-field">
                            <input type="text" name="name" id="name">
                            <span>Name</span>
                            <p id="name_error"></p>
                        </div>
                        <div class="input-field">
                            <input type="email" name="email" id="email">
                            <span>Email Address</span>
                            <p id="email_error"></p>
                        </div>
                        <div class="input-field">
                            <input type="password" name="password" id="password">
                            <span>Password</span>
                            <p id="password_error"></p>
                        </div>
                        <div class="input-field">
                            <input type="password" id="confirm_password">
                            <span>Confirm Password</span>
                            <p id="confirm_password_error"></p>
                        </div>

                        <div class="btn-submit">
                            <!-- <input type="submit" value="Login" name="submit"> -->
                            <button type="submit" id="btn-submit" name="submit">Register</button>

                        </div>

                        <div class="input-field">
                            <p id="error_submit"></p>
                        </div>

                        <?php

                        if (isset($_POST["submit"])) {

                            if (empty($name)) {
                                echo "Enter Name";
                            } else if (strlen($name) == 30) {
                                echo "";
                            } else {
                                $name = $_POST["name"];
                            }
                            if (empty($email)) {
                                echo "Enter Name";
                            } else if (strlen($email) == 30) {
                                echo "";
                            } else {
                                $email = $_POST["email"];
                            }
                            if (empty($password)) {
                                echo "Enter Name";
                            } else if (strlen($password) == 15) {
                                echo "";
                            } else {
                                $password = $_POST["password"];
                            }

                            echo $name;
                            echo $email;
                            echo $password;

                            $sql = "INSERT INTO user (name, email, password, role) VALUES ('$name', '$email', '$password', 'Client')";

                            if ($Connect_Data->query($sql) === TRUE) {
                                echo "New record created successfully";
                            } else {
                                echo "Error: " . $sql . "<br>" . $Connect_Data->error;
                            }


                        }

                        ?>

                    </form>
                </div>
            </div>
        </div>
    </div>







</body>
<script src="js/index.js"></script>


</html>