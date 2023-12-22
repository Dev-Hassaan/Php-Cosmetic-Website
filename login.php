<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include("components/component.php");
    include("components/header.php");

    ?>

</head>

<body>


    <div class="background-container">
        <img src="public/background/webbackground.jpg" alt="">
        <?php
        include("components/nav.php")
            ?>
        <div class="container">
            <div class="form-container">
                <div class="form-image">
                    <img src="public\background\webdesign.jpg" alt="Login">

                </div>

                <div class="form-field">
                    <h1>Login</h1>
                    <form method="POST" id="sub">
                        <div class="input-field">
                            <input type="email" name="email">
                            <span>Email Address</span>
                            <p></p>
                        </div>
                        <div class="input-field">
                            <input type="password" name="password">
                            <span>Password</span>
                            <p></p>
                        </div>

                        <div class="btn-submit">
                            <!-- <input type="submit" value="Login" name="submit"> -->
                            <button type="submit" name="submit" id="btn-submit">Login</button>

                        </div>

                        <?php

                        if (isset($_POST["submit"])) {
                            $email = $_POST["email"];
                            $password = $_POST["password"];

                            echo $email;
                            echo $password;

                            $sql = "SELECT email FROM user WHERE email = '$email' LIMIT 1";

                            $result = $Connect_Data->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo $row["email"];
                                    $_SESSION["email"] = $row["email"];

                                }
                            } else {
                                echo "";
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