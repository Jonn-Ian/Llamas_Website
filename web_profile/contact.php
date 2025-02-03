<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- SEO Meta Description -->
        <meta name="description" content="Get in touch with Llamas Accounting for your accounting needs. Fill out our contact form, or reach out via email for further information.">
        <meta name="author" content="Llamas Accounting">

        <title>Llamas Accounting</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="css/slick.css"/>
        <link href="css/tooplate-little-fashion.css" rel="stylesheet">
    </head>
    
    <body>

        <section class="preloader">
            <div class="spinner">
                <span class="sk-inner-circle"></span>
            </div>
        </section>
    
        <main>
            <?php require 'templates/nav/nav.php';?>

            <header class="site-header section-padding-img site-header-image">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-12 header-info">
                            <h1>
                                <span class="d-block text-primary">Say hello to us</span>
                                <span class="d-block text-dark">love to hear you</span>
                            </h1>
                        </div>
                    </div>
                </div>

                <!-- Add meaningful alt text for accessibility -->
                <img src="images/header/positive-european-woman-has-break-after-work.jpg" class="header-image img-fluid" alt="Smiling woman enjoying a break after work">
            </header>

            <section class="contact section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <h2 class="mb-4">Let's <span>begin</span></h2>

                            <form class="contact-form me-lg-5 pe-lg-3" role="form">
                                <div class="form-floating">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Full name" required>
                                    <label for="name">Full name</label>
                                </div>

                                <div class="form-floating my-4">
                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>
                                    <label for="email">Email address</label>
                                </div>
                                
                                <div class="form-floating my-4">
                                    <!-- Change input type to text for subject -->
                                    <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject" required>
                                    <label for="subject">Subject</label>
                                </div>

                                <div class="form-floating mb-4">
                                    <textarea id="message" name="message" class="form-control" placeholder="Leave a comment here" required style="height: 160px"></textarea>
                                    <label for="message">Tell us about the project</label>
                                </div>

                                <div class="col-lg-5 col-6">
                                    <button type="submit" class="form-control">Send</button>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-6 col-12 mt-5 ms-auto">
                            <div class="row">
                                <div class="col-6 border-end contact-info">
                                    <h6 class="mb-3">Email</h6>
                                        bsl@llamasaccounting@gmail.com
                                    </a>
                                </div>

                                <div class="col-6 border-top border-end contact-info">
                                    <h6 class="mb-3">Our Office</h6>
                                    <p class="text-muted">Tytana Plaza, 611 V. Tytana St., Binondo, Manila, 1006</p>
                                </div>

                                <div class="col-6 border-top contact-info">
                                    <h6 class="mb-3">Our Socials</h6>
                                    <ul class="social-icon">
                                        <!-- Social Media links can be updated here -->
                                        <li><a href="https://www.messenger.com" class="social-icon-link bi-messenger" target="_blank"></a></li>
                                        <li><a href="https://www.youtube.com" class="social-icon-link bi-youtube" target="_blank"></a></li>
                                        <li><a href="https://www.instagram.com" class="social-icon-link bi-instagram" target="_blank"></a></li>
                                        <li><a href="https://www.whatsapp.com" class="social-icon-link bi-whatsapp" target="_blank"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </main>

        <?php require 'templates/nav/footer.php'; ?>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/Headroom.js"></script>
        <script src="js/jQuery.headroom.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>
