<?php
session_start();
?>
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div>
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.php">Violin Lessons</a>
        </div>
        <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (isset($_SESSION["authenticated"])) {
                    echo ('
                <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Home</a>
                  <ul class="dropdown-menu">
                    <li><a href="index.php">Home</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Profile</a>
                    <ul class="dropdown-menu">
                    <li><a href="profile.php">Profile</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Calendar</a>
                  <ul class="dropdown-menu">
                    <li><a href="calendar.php">Calendar</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Logout</a>
                    <ul class="dropdown-menu">
                    <li><a href="logout.php">Logout</a></li>
                    </ul>
                </li>');
                } else {
                    echo ('<li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Login</a>
                  <ul class="dropdown-menu">
                    <li><a href="LoginPage.php">Login</a></li>
                  </ul>
                </li>');
                }
                ?>
            </ul>
        </div>
    </div>
</nav>