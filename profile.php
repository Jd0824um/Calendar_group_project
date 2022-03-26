<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <title>Profile</title>
  <?php include 'styles.html'; ?>
</head>

<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
  <main>
    <div class="page-loader">
      <div class="loader">Loading...</div>
    </div>
    <?php include 'navbar.php'; ?>
    <div class="main">
      <section class="module bg-dark-60 gallery-page-header parallax-bg" data-background="assets/images/gallery_bg.jpg">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <h2 class="module-title font-alt">Mr. Green</h2>
              <div class="module-subtitle font-serif">“Music is the movement of sound to reach the soul for the education of its virtue.”- Plato</div>
            </div>
          </div>
        </div>
      </section>
      <section class="module">
        <div class="container">
          <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="gallery-item">
              <div class="gallery-image">
                <img src="teacher.jpg" alt="Teacher1" /></div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="gallery-item">
              <h4 class="font-alt mb-0">Orchestra</h4>
              <hr class="divider-w mt-10 mb-20">
              <p>Mr. Green has studied piano, guitar, voice and percussion through various schools, including School of The Arts High School and San Francisco State University, as well as piano lessons with jazz masters such as Mark Little, Smith Dobson, Carlos Federico, and currently John Calloway. He teaches all ages and truly believes that he's been teaching informally since his rock days as a teenager at age 15. Formally, he has been teaching privately for about ten years, and has been with New Mozart School since 2007. Also, he is a professional musician and has been playing with various groups for the last twelve years, including his own band, Mascabeza, and others such as Benny Belard's band, Avance, Los Rumberos, and many more.</p>
            </div>
          </div>
        </div>
      </section>
      <hr class="divider-d">
      <?php include 'footer.html'; ?>
    </div>
    <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
  </main>
</body>
</html>
<?php include 'mainScripts.html'; ?>
