<!DOCTYPE HTML>
<html lang="en">
<html>

<head>
    <style>
        body {
            margin: 0;
        }

        .title {
            text-align: center;
            background-color: black;
            color: white;
            padding: 10px 0;
            margin-top: 10px;
        }

        .body-row {
            display: flex;
            justify-content: space-evenly;
        }

        .button {
            padding: 20px;
            color: black;
            text-decoration: none;
        }

        .search {
            width: 150px;
        }

        .nav-wrapper {
            font-family: "Roboto Condensed", sans-serif;
            letter-spacing: 4px;
            font-weight: 400;
            font-size: 16px;
            text-transform: uppercase;
            text-decoration: none;
            color: white;
            background-color: rgba(10, 10, 10, 0.9);
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 0;
            padding: 10;
        }
    </style>
</head>

<?php
    $loggedIn;
    if (isset($_POST['username'])) {
        $loggedIn = (boolean) $_POST['username'];
    } else {
        $loggedIn = null;
    }

    $profile;
    if (isset($_POST['profile'])) {
        $profile = (boolean) $_POST['profile'];
    } else {
        $profile = null;
    }
?>

<body style="background-color: rgba(10, 10, 10, 0.9)">
    <title>Violin Lessons </title>
    <form method="POST">
        <nav>
            <div style="background-color: rgba(10, 10, 10, 0.9)" ; class="nav-wrapper">
                <p style="font-family:verdana">Violin Lessons</p>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <?php 
                        if (is_bool($loggedIn || $profile)) {
                            echo("<a name='profile' style='text-decoration: none; color:white;' type='button' href='profile.php'>Profile</a>");
                        } else {
                            echo("<a style='text-decoration: none; color:white;' type='button' href='LoginPage.php'>Login</a>");
                        }
                    ?>
                    <a Style="text-decoration: none; color:white;" type="button" href="ProjectHomePage.php">Home</a>
                    <a Style="text-decoration: none; color:white;" type="button" style="color:white;" href="Calendar.php">Calendar</a></li>
                    <a Style="text-decoration: none; color:white;" type="button" style="color:white;" href="Contact.php">Contact</a></li>
                </ul>
            </div>
        </nav>
        </div>
        <div class="body-row">
            <img src="violin.png" />
        </div>
    </form>
</body>
<footer>
</footer>

</html>