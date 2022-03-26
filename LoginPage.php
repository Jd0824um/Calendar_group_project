<?php
session_start();
if (isset($_SESSION["authenticated"])) {
  echo "<script> location.href='index.php'; </script>";
}
?>
<!DOCTYPE html>
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
  </style>
</head>

<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60" style="background-color: rgba(10, 10, 10, 0.9)">
  <main>
    <div class="page-loader">
      <div class="loader">Loading...</div>
    </div>
    <?php include 'navbar.php'; ?>
    <div>
      <section class="module bg-dark-60 portfolio-page-header" data-background="im_violin0.jpg">
        <div class="container">
          <div class="row">
            <form method="POST" action="index.php">
              <head>
                <h1 style="text-align: center; color:white; font-family:Roboto Condensed, sans-serif;">Login</h1>
              </head>
              <form>
                <div class="container">
                  <label style="color: white; font-family:Roboto Condensed, sans-serif;">Username:</label>
                  <input name="username" type="text" placeholder="Enter Username" name="username" required>
                  <br>
                  <label style="color: white; font-family:Roboto Condensed, sans-serif;">Password:</label>
                  <input type="password" placeholder="Enter Password" name="password" required>
                  <button style="font-family:Roboto Condensed, sans-serif;" onsubmit="authenticate()" type="submit">Login</button>
                  <div class="remember">
                    <input style="font-family:Roboto Condensed, sans-serif;" type="checkbox" checked="checked;"/>Remember me?
                  </div>
                </div>
              </form>
          </div>
        </div>
      </section>
      <?php include 'footer.html'; ?>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </div>
  </main>
  <?php include 'mainScripts.html'; ?>
</body>

</html>

<script>
  function authenticate() {
    <?php
    session_start();
    $_SESSION["authenticated"] = "true";
    ?>
  }
</script>