<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <?php include 'styles.html'; ?>
</head>

<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
  <main>
    <div class="page-loader">
      <div class="loader">Loading...</div>
    </div>
    <?php include 'navbar.php'; ?>
    <div class="main">
      <section class="module bg-dark-60 portfolio-page-header" style="padding-bottom: 567px;" data-background="indexImg.jpg">
        <div class="container">
          <?php if (isset($_SESSION["firstTime"])) : ?>
            <div class="alert alert-success" role="alert">
              Welcome <?php echo($_SESSION["username"]) ?>!
              <?php $_SESSION["firstTime"] = null?>
            </div>
          <?php endif ?>
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <h2 class="module-title font-alt">Music Lessons</h2>
              <div class="module-subtitle font-serif">Learn Music with love & care.</div>
            </div>
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