<!DOCTYPE HTML>
<html lang="en">
<html>

<head>
    <style>
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
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
        .links {
            padding: 10px 0;
        }
        .button {
            padding: 20px;
            color: black;
            text-decoration: none;
        }
        .search {
            width: 150px;
        }
        .nothing {
            width: 150px;
        }
    </style>
</head>

<body>
    <form method="POST">
        <div class="header">
            <div class="nothing"></div>
            <div class="links">
                <a href="ProjectHomePage.php" class="button">Home</a>
                <a href="Calendar.php" class="button">Calendar</a>
                <a href="Contact.php" class="button">Contact</a>
            </div>
            <div class="search">
                <input type="text" placeholder="Search..">
            </div>
        </div>
        <div class="title">
            <h1> Violin Learning by Randy</h1>
            <p>Concert violionist now teaching you</p>
        </div>
        <p>
            Randy stuidied at the orchestra maxima in spain, and was later recognized by the duke or orchestra in the grand space tour of Mos Enya.
    </p>
    <div class = "body-row">
        <p>
            Rates:   
        </p>
         <img src="LessonPicture.png"/>
    </div>
    </form>
</body>

</html>