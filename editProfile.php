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
            <section class="module gallery-page-header parallax-bg" data-background="assets/images/gallery_bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <label for="name">
                                Name:
                                <input name="name" style="width: 500px;" class="form-control input-lg" type="text" placeholder="Large input" value="Mr. Green">
                            </label>
                        </div>
                        <div class="col">
                            <label for="subHeader">
                                Sub-Header:
                                <textarea style="width: 500px;" name="subHeader" class="form-control" rows="7" placeholder="Textarea">“Music is the movement of sound to reach the soul for the education of its virtue.”- Plato"</textarea>
                            </label>
                        </div>
                    </div>
                </div>
            </section>
            <section class="module">
                <div class="container">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="gallery-item">
                            <img src="teacher.jpg" alt="Teacher1" />
                            <div>
                                <button class="btn btn-d btn-circle" data-target="#uploadImgModal" data-toggle="modal">Change Photo</button>
                            </div>
                            <?php include 'uploadImage.php'; ?>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="gallery-item">
                            <label for="class">
                                Class:
                                <input name="class" width="500px;" class="form-control input-lg" type="text" placeholder="Large input" value="Orchestra">
                            </label>
                            <hr class="divider-w mt-10 mb-20">
                            <label for="aboutMe">
                                About Me:
                                <textarea style="width: 500px; height: 400px;" name="aboutMe" class="form-control" rows="7" placeholder="Textarea">Mr. Green has studied piano, guitar, voice and percussion through various schools, including School of The Arts High School and San Francisco State University, as well as piano lessons with jazz masters such as Mark Little, Smith Dobson, Carlos Federico, and currently John Calloway. He teaches all ages and truly believes that he's been teaching informally since his rock days as a teenager at age 15. Formally, he has been teaching privately for about ten years, and has been with New Mozart School since 2007. Also, he is a professional musician and has been playing with various groups for the last twelve years, including his own band, Mascabeza, and others such as Benny Belard's band, Avance, Los Rumberos, and many more."</textarea>
                            </label>
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