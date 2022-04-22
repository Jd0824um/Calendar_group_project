<?php
  session_start();
  if (!isset($_SESSION["authenticated"])) {
    echo "<script> location.href='LoginPage.php'; </script>";
  }
?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <title>Calendar</title>
  <?php include 'styles.html'; ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400|Roboto+Condensed:400|Fjalla+One:400'>
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="css/style.css">
</head>

<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
  <main>
    <div class="page-loader">
      <div class="loader">Loading...</div>
    </div>
    <?php include 'navbar.php'; ?>
    <div class="main">
      <section class="module">
        <div class="container">
          <div class="row multi-columns-row">
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="gallery-item">
                <div class="calendar-wrapper">
                  <div id="divStudents"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="gallery-item">
                <div class="col">
                  <div class="calendar-wrapper">
                    <div id="divScheduler"></div>
                  </div>
                </div>
              </div>
            </div>
            <script src="js/index.js"></script>
          </div>
          <div class="calendar-wrapper">
            <button id="btnPrev" type="button">Prev</button>
            <button id="btnNext" type="button">Next</button>
            <div id="divCal"></div>
          </div>
      </section>
      <?php include 'footer.html'; ?>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </div>
  </main>
  <?php include 'mainScripts.html'; ?>
</body>

</html>