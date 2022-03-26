<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
  <?php include 'styles.html';?>
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <?php include 'navbar.php';?>
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
                  <div class="gallery-image"><a class="gallery" href="assets/images/gallery/big/big_3.jpg" title="Title 1"><img src="assets/images/gallery/thumbnail/full_2/3.jpg" alt="Gallery Image 1"/>
                      <div class="gallery-caption">
                        <div class="gallery-icon"><span class="icon-magnifying-glass"></span></div>
                      </div></a></div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="gallery-item">
                  <div class="gallery-image"><a class="gallery" href="assets/images/gallery/big/big_9.jpg" title="Title 2"><img src="assets/images/gallery/thumbnail/full_2/9.jpg" alt="Gallery Image 2"/>
                      <div class="gallery-caption">
                        <div class="gallery-icon"><span class="icon-magnifying-glass"></span></div>
                      </div></a></div>
                </div>
              </div>
          </div>
        </section>
        <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <h4 class="font-alt mb-0">Paragraph Examples</h4>
                <hr class="divider-w mt-10 mb-20">
                <p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.</p>
                <p>The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <hr class="divider-d">
        <?php include 'footer.html'; ?>
      </div>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
    <?php include 'mainScripts.html'; ?>
  </body>
</html>