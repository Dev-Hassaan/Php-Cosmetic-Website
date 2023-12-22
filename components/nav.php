<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="store.php">Store</a></li>
        <li><a href="about.php">About</a></li>
    </ul>
    <span>
        Logo
    </span>
    <?php

    if (isset($_SESSION["email"])) {
        echo "<ul>
                <li><a href='registration.php'>Registration</a></li>
                <li><a href='login.php'>Login</a></li>
             </ul>";
    } else {

        echo "
    <ul>
        <li>
            <a class='material-symbols-outlined' href='#'>
                search
            </a>
            <a class='material-symbols-outlined' href='#'>
                person
            </a>
            <a class='material-symbols-outlined' href='#'>
                shopping_bag
            </a>
        </li>
    </ul>
        ";
    }

    ?>

</nav>