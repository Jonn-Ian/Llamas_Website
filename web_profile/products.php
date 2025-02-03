<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Browse our services and products, including the latest arrivals and popular choices at Llamas Accounting.">
    <meta name="author" content="Llamas Accounting">

    <title>Llamas Accounting - Services</title>

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

        <header class="site-header section-padding d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-12">
                        <h1>
                            <span class="d-block text-primary">Our</span>
                            <span class="d-block text-dark">Services</span>
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <section class="products section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="mb-5">Our Main Services</h2>
                    </div>

                    <?php require 'templates/nav/services.php'; ?>

                    <div class="col-12">
                        <h2 class="mb-5">Other Services</h2>
                    </div>

                    <div class="col-lg-4 col-12 mb-3">
                        <div class="product-thumb">
                            
                            <div class="product-info d-flex">
                                <div>
                                    <h5 class="product-title mb-0">
                                        <a href="product-detail.html" class="product-title-link">Bookkeeping and Tax Filling</a>
                                    </h5>
                                    <p class="product-p">Descriptions</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mb-3">
                        <div class="product-thumb">
                          
                            <div class="product-info d-flex">
                                <div>
                                    <h5 class="product-title mb-0">
                                        <a href="product-detail.html" class="product-title-link">Estate Tax Processing</a>
                                    </h5>
                                    <p class="product-p">Descriptions</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mb-3">
                        <div class="product-thumb">
                            
                            <div class="product-info d-flex">
                                <div>
                                    <h5 class="product-title mb-0">
                                        <a href="product-detail.html" class="product-title-link">Business Registration</a>
                                    </h5>
                                    <p class="product-p">Descriptions</p>
                                </div>
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
