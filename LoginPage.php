<!DOCTYPE html>
<?php
session_start();
if (isset($_SESSION["authenticated"])) {
  echo "<script> location.href='index.php'; </script>";
}
?>
<html lang="en-US" dir="ltr">

<head>
  <title>Login</title>
  <?php include 'styles.html'; ?>

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

    .remember {
      color: white;
    }

    #login {
      padding-top: 260px;
      padding-bottom: 265px;
    }
  </style>
</head>

<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60" style="background-color: rgba(10, 10, 10, 0.9)">
  <main>
    <div class="page-loader">
      <div class="loader">Loading...</div>
    </div>
    <?php include 'navbar.php'; ?>
    <div class="main">
      <section id="login" class="module portfolio-page-header" data-background="im_violin0.jpg">
        <div class="container">
          <div class="row">
            <h1 style="text-align: center; color:white; font-family:Roboto Condensed, sans-serif;">Login</h1>
            <form method="POST" action="LoginPage.php">
              <div class="container">
                <label style="color: white; font-family:Roboto Condensed, sans-serif;">Username:</label>
                <input type="text" placeholder="Enter Username" name="username" required>
                <br>
                <label style="color: white; font-family:Roboto Condensed, sans-serif;">Password:</label>
                <input type="password" placeholder="Enter Password" name="password" required>
                <button style="font-family:Roboto Condensed, sans-serif;" `>Login</button>
                <div class="remember">
                  <input style="font-family:Roboto Condensed, sans-serif;" type="checkbox" checked="checked;" />Remember me?
                </div>
              </div>
            </form>
            <?php
            function authenticate()
            {
              $db = new mysqli('127.0.0.1', 'root', null, 'lessons');
              if (mysqli_connect_errno()) {
                echo '<p style="color: white; font-family:Roboto Condensed, sans-serif;">Error: Could not connect to database.<br/>Please try again later.</p>';
              } else {
                $query = "SELECT * FROM userInfo WHERE username = ?;";
                $stmt = $db->prepare($query);
                $stmt->bind_param("s", $_POST['username']);
                $stmt->execute();
                $result = $stmt->get_result();
                $row = $result->fetch_assoc();
                var_dump($row);
                if ($row && password_verify($_POST['password'], $row['password'])) {
                  session_start();
                  $_SESSION["authenticated"] = "true";
                  $_SESSION["user"] = $row['userID'];
                  echo "<script> location.href='index.php'; </script>";
                } else {
                  echo '<p style="color: white; font-family:Roboto Condensed, sans-serif;">Error: username/password combination not found.</p>';
                }
                $stmt->close();
                $db->close();
              }
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
              authenticate();
            }
            ?>
          </div>
        </div>
      </section>
      <?php include 'footer.html'; ?>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </div>
  </main>
</body>

</html>
<?php include 'mainScripts.html'; ?>
