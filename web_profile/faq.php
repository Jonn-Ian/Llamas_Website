<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- SEO Meta Description -->
    <meta name="description" content="Frequently Asked Questions about Llamas Accounting, including our services, website features, and how you can support us.">
    <meta name="author" content="Llamas Accounting">

    <title>Llamas Accounting - FAQs Page</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/slick.css"/>
    <link href="css/tooplate-little-fashion.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
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
                            <span class="d-block text-primary">Your favorite questions</span>
                            <span class="d-block text-dark">and our answers to them</span>
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <section class="faq section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <h2>General Info.</h2>

                        <div class="accordion" id="accordionGeneral">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionGeneralOne" aria-expanded="true" aria-controls="accordionGeneralOne">
                                        What is Llamas Accounting?
                                    </button>
                                </h2>

                                <div id="accordionGeneralOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionGeneral">
                                    <div class="accordion-body">
                                        <p class="large-paragraph"><strong>Llamas Accounting</strong> Llamas Accounting would suggest that the business is focused on offering accounting services, such as bookkeeping, tax preparation, financial advice, and other services related to managing finances</p>
                                    
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionGeneralTwo" aria-expanded="false" aria-controls="accordionGeneralTwo">
                                        How can I support your website?
                                    </button>
                                </h2>

                                <div id="accordionGeneralTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionGeneral">
                                    <div class="accordion-body">
                                        <p class="large-paragraph">You can support the Llamas Accounting website by sharing it with your friends or colleagues on social media or by recommending it to others who might benefit from it.</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <h2 class="mt-5">About <span>our services</span></h2>

                        <div class="accordion" id="accordionProduct">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionProductOne" aria-expanded="true" aria-controls="accordionProductOne">
                                        What services does Llamas Accounting offer?
                                    </button>
                                </h2>

                                <div id="accordionProductOne" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionProduct">
                                    <div class="accordion-body">
                                        <p class="large-paragraph"><strong>We offer accounting services</strong> such as tax preparation, bookkeeping, financial consulting, and payroll management. These services are designed to help businesses keep their finances in order and optimize financial performance.</p>
                                        <p class="large-paragraph">Our services are tailored to meet the needs of small and medium-sized businesses to help them grow and stay compliant.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionProductTwo" aria-expanded="false" aria-controls="accordionProductTwo">
                                        What makes Llamas Accounting unique?
                                    </button>
                                </h2>

                                <div id="accordionProductTwo" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionProduct">
                                    <div class="accordion-body">
                                        <p class="large-paragraph">Llamas Accounting is known for its personalized approach, helping clients with customized financial solutions. Whether you’re a startup or a growing business, we offer advice and services tailored to your specific needs.</p>
                                    </div>
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
