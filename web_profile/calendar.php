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
    <link rel="stylesheet" href="css/calendar_style.css">
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

                    
                         <!--calendar-->
                         <div class="calendar-container">
                            <div class="calendar-header">
                                <button class="prev-month">Prev</button>
                                <h2 class="month-year"></h2>
                                <button class="next-month">Next</button>
                            </div>
                            <div class="calendar-grid">
                                <!-- Days of the week -->
                                <div class="weekdays">
                                    <div class="weekday">Sun</div>
                                    <div class="weekday">Mon</div>
                                    <div class="weekday">Tue</div>
                                    <div class="weekday">Wed</div>
                                    <div class="weekday">Thu</div>
                                    <div class="weekday">Fri</div>
                                    <div class="weekday">Sat</div>
                                </div>
                                <div class="days"></div>
                            </div>
                            <div class="event-modal">
                                <form id="event-form">
                                    <input type="text" id="event-title" placeholder="Event Title">
                                    <textarea id="event-description" placeholder="Event Description"></textarea>
                                    <button type="submit">Save Event</button>
                                    <button type="button" class="close-modal">Cancel</button>
                                </form>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </header>
    </main>

    <?php require 'templates/nav/footer.php'; ?>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/Headroom.js"></script>
    <script src="js/jQuery.headroom.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/calendar_script.js"></script>
</body>
</html>
