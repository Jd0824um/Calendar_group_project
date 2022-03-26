<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <title>Contact Us</title>
    <?php include 'styles.html'; ?>
</head>

<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <?php include 'navbar.php'; ?>
        <div class="main">
            <section class="module bg-dark-60 contact-page-header bg-dark">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h2 class="module-title font-alt">Contact Us</h2>
                            <div class="module-subtitle font-serif"></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="module">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <h4 class="font-alt">Get in touch</h4><br />
                            <form id="contactForm" role="form" method="post" action="contact.php">
                                <div class="form-group">
                                    <label class="sr-only" for="name">Name</label>
                                    <input class="form-control" type="text" id="name" name="name" placeholder="Your Name*" required="required" data-validation-required-message="Please enter your name." />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="email">Email</label>
                                    <input class="form-control" type="email" id="email" name="email" placeholder="Your Email*" required="required" data-validation-required-message="Please enter your email address." />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="7" id="message" name="message" placeholder="Your Message*" required="required" data-validation-required-message="Please enter your message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-block btn-round btn-d" id="cfsubmit" type="submit">Submit</button>
                                </div>
                            </form>
                            <div class="ajax-response font-alt" id="contactFormResponse"></div>
                        </div>
                        <div class="col-sm-6">
                            <h4 class="font-alt">Additional info</h4><br />
                            <p>Violin is the most beautiful instrument in the world (I believe), learn to play it.</p>
                            <img src="im_violin1.jpg" />
                            <hr />
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