<?php
session_start();
?>
<title>Home</title>
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div>
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.php">Music Lessons</a>
        </div>
        <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (isset($_SESSION["authenticated"])) {
                    echo ('
                <li><a href="index.php">Home</a>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Me</a>
                    <ul class="dropdown-menu">
                      <li><a href="Calendar.php">Calendar</a></li>
                      <li><a href="profile.php">Profile</a></li>
                      <li><a href="UpdateUser.php">Update User</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">System</a>
                    <ul class="dropdown-menu">
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="logout.php">Logout</a></li>
                    </ul>
                </li>');
                } else {
                    echo ('<li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">System</a>
                  <ul class="dropdown-menu">
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="LoginPage.php">Login</a></li>
                  </ul>
                </li>');
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
