<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Llamas Accounting - About Page</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link rel="stylesheet" href="css/slick.css"/>

        <link href="css/tooplate-little-fashion.css" rel="stylesheet">
        <link rel="stylesheet" href="team_info.css">
        
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

                        <div class="col-lg-6 col-12 header-info">
                            <h1>
                                <span class="d-block text-primary">Llamas</span>
                                <span class="d-block text-dark">Accounting</span>
                            </h1>
                        </div>
                    </div>
                </div>

                <img src="images/header/businesspeople-meeting-office-working.jpg" class="header-image img-fluid" alt="">
            </header>

            <section class="team section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="mb-5">ABOUT <span>US</span></h2>
                        </div>

                        <div class="col-lg-4 mb-4 col-12">
                            <div class="team-thumb d-flex align-items-center">
                                <img src="images/people/Brian.jfif" class="img-fluid custom-circle-image team-image me-4" alt="">

                                <div class="team-info">
                                    <h5 class="mb-0">Brian Jay</h5>
                                    <strong class="text-muted">Managing Owner</strong>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn custom-modal-btn" data-bs-toggle="modal" data-bs-target="#don">
                                      <i class="bi-plus-circle-fill"></i>
                                    </button>

                                </div>
                            </div>
                        </div>

                        <!-- <div class="col-lg-4 mb-4 col-12">
                            <div class="team-thumb d-flex align-items-center">
                                <img src="images/people/portrait-british-woman.jpeg" class="img-fluid custom-circle-image team-image me-4" alt="">

                                <div class="team-info">
                                    <h5 class="mb-0">James</h5>
                                    <strong class="text-muted">UI/UX</strong> -->

                                    <!-- Button trigger modal -->
                                    <!-- <button type="button" class="btn custom-modal-btn" data-bs-toggle="modal" data-bs-target="#kelly">
                                      <i class="bi-plus-circle-fill"></i>
                                    </button>
                                </div>
                            </div>
                        </div> -->

                        <!-- <div class="col-lg-4 mb-lg-0 mb-4 col-12">
                            <div class="team-thumb d-flex align-items-center">
                                <img src="images/people/beautiful-woman-face-portrait-brown-background.jpeg" class="img-fluid custom-circle-image team-image me-4" alt="">

                                <div class="team-info">
                                    <h5 class="mb-0">Leah</h5>
                                    <strong class="text-muted">Intern</strong> -->

                                    <!-- Button trigger modal -->
                                    <!-- <button type="button" class="btn custom-modal-btn" data-bs-toggle="modal" data-bs-target="#marie">
                                      <i class="bi-plus-circle-fill"></i>
                                    </button>
                                </div>
                            </div>
                        </div> -->

                    </div>
                </div>
            </section>

            <section class="testimonial section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-9 mx-auto col-11">
                            <h2 class="text-center">Customer love, <br> <span>Llamas</span> Accounting</h2>

                            <div class="slick-testimonial">
                                <div class="slick-testimonial-caption">
                                    <p class="lead">Over three years in business, We’ve had the chance to work on a variety of projects, with companies Lorem ipsum dolor sit amet</p>

                                    <div class="slick-testimonial-client d-flex align-items-center mt-4">
                                        <img src="images/people/Brian_1.jfif" class="img-fluid custom-circle-image me-3" alt="">

                                        <span>Brian Jay Llamas <strong class="text-muted">Certified Public Accountant</strong></span>
                                    </div>
                                </div>

                                <div class="slick-testimonial-caption">
                                    <p class="lead">Over three years in business, We’ve had the chance to work on a variety of projects, with companies Lorem ipsum dolor sit amet</p>

                                    <div class="slick-testimonial-client d-flex align-items-center mt-4">
                                        <img src="images/people/beautiful-woman-face-portrait-brown-background.jpeg" class="img-fluid custom-circle-image me-3" alt="">

                                        <span>Sandar, <strong class="text-muted">Zoom Fashion Idea</strong></span>
                                    </div>
                                </div>

                                <div class="slick-testimonial-caption">
                                    <p class="lead">Over three years in business, We’ve had the chance to work on a variety of projects, with companies Lorem ipsum dolor sit amet</p>

                                    <div class="slick-testimonial-client d-flex align-items-center mt-4">
                                        <img src="images/people/portrait-british-woman.jpeg" class="img-fluid custom-circle-image me-3" alt="">

                                        <span>Marie, <strong class="text-muted">Art Fashion Design</strong></span>
                                    </div>
                                </div>

                                <div class="slick-testimonial-caption">
                                    <p class="lead">Over three years in business, We’ve had the chance to work on a variety of projects, with companies Lorem ipsum dolor sit amet</p>

                                    <div class="slick-testimonial-client d-flex align-items-center mt-4">
                                        <img src="images/people/woman-wearing-mask-face-closeup-covid-19-green-background.jpeg" class="img-fluid custom-circle-image me-3" alt="">

                                        <span>Catherine, <strong class="text-muted">Dress Fashion</strong></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </main>

        <?php require 'templates/nav/footer.php'; ?>

        <!-- TEAM MEMBER MODAL -->
        <div class="modal fade" id="don" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0">
                    <div class="modal-header flex-column">
                        <h3 class="modal-title" id="exampleModalLabel">Brian Jay S. Llamas</h3>

                        <h6 class="text-muted">Owner Manager</h6>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <h5 class="mb-4">Oadasdasdasdasdadasd</h5>

                        <div class="row mb-4">
                            <div class="col-lg-6 col-12">
                                <p>asdasdasdadsadasd</p>
                            </div>

                            <div class="col-lg-6 col-12">
                                <p>asdasdasdasdasd.</p>
                            </div>
                        </div>

                        <ul class="social-icon">
                            <li class="me-3"><strong>Where to find?</strong></li>

                            <li><a href="#" class="social-icon-link bi-youtube"></a></li>

                            <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>

                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <!-- TEAM MEMBER MODAL -->
        <div class="modal fade" id="kelly" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0">
                    <div class="modal-header flex-column">
                        <h3 class="modal-title" id="exampleModalLabel">Kelly Lisa</h3>

                        <h6 class="text-muted">Global, Head of Marketing</h6>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <h5 class="mb-4">Over three years in business had the chance to work on variety of projects, with companies</h5>

                        <div class="row mb-4">
                            <div class="col-lg-6 col-12">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>

                            <div class="col-lg-6 col-12">
                                <p>Incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse commodo viverra.</p>
                            </div>
                        </div>

                        <ul class="social-icon">
                            <li class="me-3"><strong>Where to find?</strong></li>

                            <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <!-- TEAM MEMBER MODAL -->
        <div class="modal fade" id="marie" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0">
                    <div class="modal-header flex-column">
                        <h3 class="modal-title" id="exampleModalLabel">Marie Sam</h3>

                        <h6 class="text-muted">Founder & CEO</h6>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <h5 class="mb-4">Over three years in business had the chance to work on variety of projects, with companies</h5>

                        <div class="row mb-4">
                            <div class="col-lg-6 col-12">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>

                            <div class="col-lg-6 col-12">
                                <p>Incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse commodo viverra.</p>
                            </div>
                        </div>

                        <ul class="social-icon">
                            <li class="me-3"><strong>Where to find?</strong></li>

                            <li><a href="#" class="social-icon-link bi-twitter"></a></li>

                            <li><a href="#" class="social-icon-link bi-linkedin"></a></li>

                            <li><a href="#" class="social-icon-link bi-envelope"></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/Headroom.js"></script>
        <script src="js/jQuery.headroom.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>
