<!DOCTYPE html>
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

        Body {
      background-color: rgba(0, 0, 0, 0.831);
      font-family: Calibri, Helvetica, sans-serif;

    }

    button {
      background-color: rgba(14, 20, 26, 0.899);
      width: 100%;
      color: white;
      padding: 15px;
      margin: 10px 0px;
      border: none;
      cursor: pointer;
    }

    form {
      border: 2px solid;
    }

    input[type=text],
    input[type=password] {
      width: 90%;
      margin: 8px 0;
      padding: 13px 20px;
      display: inline-block;
    }

    button:hover {
      opacity: 0.7;
    }

    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      margin: 10px 5px;
    }

    .container {
      background-color: rgba(0, 0, 0, 0.708);
      padding: 25px;
    }

    .remember {
      color: white;
    }
    </style>
</head>

<body style="background-color: rgba(10, 10, 10, 0.9)">
    <title>Violin Lessons </title>
    <form method="POST">
        <nav>
            <div style="background-color: rgba(10, 10, 10, 0.9)" ; class="nav-wrapper">
                <p font-family:"verdana">Violin Lessons</p>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <a style= "text-decoration: none; color:white; " type="button"  href="LoginPage.php">Login</a>
                    <a Style= "text-decoration: none; color:white; " type="button"  href="ProjectHomePage.php">Home</a>
                    <a Style= "text-decoration: none; color:white; " type="button" style="color:white;" href="Calendar.php">Calendar</a></li>
                    <a Style= "text-decoration: none; color:white; " type="button" style="color:white;" href="Contact.php">Contact</a></li>
                </ul>
                <div class="search">
                    <input type="text" placeholder="Search..">
                </div>
            </div>
        </nav>
    <head>
    <h1 style="text-align: center; color:white; font-family:verdana">Log in </h1>
</head>
<body>
      <form>
        <div class="container">
          <label style="color: white;">Username : </label>
          <input type="text" placeholder="Enter Username" name="username" required>
          <br>
          <label style="color: white; font-family:verdana">Password : </label>
          <input type="password" placeholder="Enter Password" name="password" required>
          <button style= "font-family:verdana;" type= submit">Login</button>
          <div class="remember">
            <input style= "font-family:verdana;" type="checkbox" checked="checked;">Remember me
          </div>
          <a style="color: white;" "font-family:verdana;"> password?</a>
        </div>
      </form>
    </body>
</html>