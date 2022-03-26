<?php
  session_start();
  if (!isset($_SESSION["authenticated"])){
    echo "<script> location.href='index.php'; </script>";
  }
?>
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
<title>Violin Lessons </title>
<form method="POST">
    <nav>
        <div style="background-color: rgba(10, 10, 10, 0.9)" ; class="nav-wrapper">
            <p style="font-family: verdana">Violin Lessons</p>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <a style="text-decoration: none; color:white; " type="button" href="LoginPage.php">Login</a>
                <a Style="text-decoration: none; color:white; " type="button" href="ProjectHomePage.php">Home</a>
                <a Style="text-decoration: none; color:white; " type="button" style="color:white;" href="Calendar.php">Calendar</a></li>
                <a Style="text-decoration: none; color:white; " type="button" style="color:white;" href="Contact.php">Contact</a></li>
            </ul>
            <div class="search">
                <input type="text" placeholder="Search..">
            </div>
        </div>
    </nav>
    </div>

</html>