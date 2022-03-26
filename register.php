<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <title>Register</title>
    <?php include 'styles.html'; ?>
</head>

<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <?php include 'navbar.php'; ?>
        <div class="main">
            <section class="module bg-dark-60 contact-page-header bg-dark" data-background="registerImg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h2 class="module-title font-alt">Register</h2>
                            <div class="module-subtitle font-serif"></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="module">
                <div class="container">
                    <div class="row">
                        <div>
                            <h4 class="font-alt">Register</h4>
                            <hr class="divider-w mb-10">
                            <form class="form">
                                <div class="form-group">
                                    <input class="form-control" id="E-mail" type="text" name="email" placeholder="Email" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="username" type="text" name="username" placeholder="Username" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="password" type="password" name="password" placeholder="Password" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="re-password" type="password" name="re-password" placeholder="Re-enter Password" />
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-block btn-round btn-b">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <?php include 'footer.html'; ?>
        </div>
        <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
</body>
<?php include 'mainScripts.html'; ?>

</html>