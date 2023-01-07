<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
    <!--Google Fonts-->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- End Bootstrap CSS -->

    <!--Custom Css-->
    <link rel="stylesheet" href="./CSS/style.css">
    <!--End Custom Css-->
</head>

<body>


    <!--Header Start-->
    <header>
        <section id="topbar"
            class="mb-2 mb-lg-0 mb-sm-0 d-none d-lg-flex align-items-center pt-2 pb-2 bg-primary text-white topbar-transparent">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6   text-start">

                        <i class="bi bi-clock"></i> Mon-Sat: 8:00 AM - 6:00 PM
                    </div>
                    <div class="col-md-6 text-end">
                        Call us: <span class="px-3"><i class="bi bi-phone "></i> <a href="tel:+251921379660"
                                style="color: #fff;"> +251 921-379660</a></span>
                    </div>
                </div>
            </div>
        </section>
        <!--Navbar Start-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <h2 class="fw-bold  mb-2 mb-lg-0 mb-sm-0">MirkuzHc</h2>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="bi bi-list"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.html">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="book.php">Book Appointment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#contact">Contact us</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mb-2 mb-lg-0 action-menu">
                        <li class="nav-item">
                            <a class="nav-link " href="login.php">
                                <i class="bi bi-person "></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--Navbar End-->
    </header>
    <!--Header End-->


    <div id="carouselExampleCaptions" class="carousel slide mb-3" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-fluid w-100 h-100 overflow-hidden" src="img/image.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-block">
                    <h5>MIRKUZ HOME BASED HEALTH CARE PLC</h5>
                    <p>We are experienced health professionals strive to improve home based health care in Ethiopia
                        where family and loved ones are cared at their home eliminating complication that comes from
                        unwanted hospital stay and expense.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="img-fluid w-100 h-100 overflow-hidden" src="img/image2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-block">
                    <h5>MIRKUZ HOME BASED HEALTH CARE PLC</h5>
                    <p>Currently the company created a job employment opportunity for more than 25 workers. Our Nurses
                        are qualified, through a proper training with full medical equipment’s in our company, in
                        addition to their college or university knowledge for a better home care skill.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="img-fluid w-100 h-100 overflow-hidden" src="img/image3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-block">
                    <h5>MIRKUZ HOME BASED HEALTH CARE PLC</h5>
                    <p>We aspire to establish a Home Care center for clients, for giving them a care in our center
                        instead of their Home.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>




    <main id="main">
        <!-- ======= Book Section ======= -->
        <section class="book">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <a href="book.php" class="booking">
                    <h1>Book an appointment</h1>
                </a>
            </div>
        </section>
        <!-- ======= Book Section ======= -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about mt-5">
            <div class="container-fluid">
                <!--Section description-->
                <div class="row  pt-5 pb-5">

                    <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("img/image.jpg");'>

                    </div>

                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

                        <div class="content">
                            <h3>What makes us different?</h3>
                            <ul class="qualities-indicator">
                                <li>Our well experienced team</li>
                                <li>Fully Certified</li>
                                <li>We strive to maintain the dignity and complete personal well-being of our clients.
                                </li>
                                <li>Appropriate Access and Service Delivery</li>
                                <li>Quality</li>
                                <li>Timeliness</li>
                                <li>Reacheability</li>
                            </ul>
                        </div>

                    </div>

                </div>

            </div>
        </section>
        <!----------- About End---------->

        <!----------- Work With Us Start --------->
        <section>
            <div class="container course pb-5 pt-5">
                <h2 class="h1-responsive font-weight-bold text-center my-4">Now We Are Ready To Give Our Services For
                </h2>
                <!--Section description-->
                <div class="row">
                    <div class="col-md-3">
                        <div class="card box">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="img/pic1.jpg" class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Hotels</h5>
                                <p class="card-text">By providing 24 hr./12 hr. our health care service and visit
                                    program to hotel guests, to increase customer satisfaction by decreasing unnecessary
                                    visit to clinics and hospital, unless it's indicated.</p>
                                <a href="#!" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card box">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="img/pic1.jpg" class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Construction Sites</h5>
                                <p class="card-text">Helps employees to have a health working environment, by improving
                                    working safety and gave them a first Aid by our health professional.</p>
                                <a href="#!" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card box">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="img/pic1.jpg" class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Schools</h5>
                                <p class="card-text">By assigning health professionals, improve the school compound to
                                    be healthier, safer and risk free, incase if there need for assistance, the nurse
                                    will give care to the child, if the condition is worse need for a better health
                                    facility, the nurse will assist with the escort.</p>
                                <a href="#!" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card box">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="img/pic1.jpg" class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Other Governmental and NGO Offices</h5>
                                <p class="card-text">Our doors are wide open to any organization willing to work with
                                    us!</p>
                                <a href="#!" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!------Work with Us End-->
        <!------Testimonials Start------>
        <section>
            <div class="row">
                <div class="col-md-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area"><img src="img/test.jpg" alt=""></div>
                                            <div class="img-text">
                                                <h2>Person One</h2>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam amet
                                                    eveniet id, ullam earum optio.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area"><img src="img/test.jpg" alt=""></div>
                                            <div class="img-text">
                                                <h2>Person Two</h2>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam amet
                                                    eveniet id, ullam earum optio.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area"><img src="img/test.jpg" alt=""></div>
                                            <div class="img-text">
                                                <h2>Person Three</h2>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam amet
                                                    eveniet id, ullam earum optio.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area"><img src="img/test.jpg" alt=""></div>
                                            <div class="img-text">
                                                <h2>Person Four</h2>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam amet
                                                    eveniet id, ullam earum optio.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area"><img src="img/test.jpg" alt=""></div>
                                            <div class="img-text">
                                                <h2>Person Five</h2>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam amet
                                                    eveniet id, ullam earum optio.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area"><img src="img/test.jpg" alt=""></div>
                                            <div class="img-text">
                                                <h2>Person Six</h2>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam amet
                                                    eveniet id, ullam earum optio.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!------Testimonials End-->
        <!------Contact Us Start-->
        <section id="contact">
            <div class="container mb-5">
                <!--Section: Contact v.2-->
                <section class="mb-4">

                    <!--Section heading-->
                    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
                    <!--Section description-->
                    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate
                        to contact us directly. Our team will come back to you within
                        a matter of hours to help you.</p>

                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6 mb-md-0 mb-5">
                            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <input type="text" id="name" name="name" class="form-control">
                                            <label for="name" class="">Your name</label>
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <input type="text" id="email" name="email" class="form-control">
                                            <label for="email" class="">Your email</label>
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="md-form mb-0">
                                            <input type="text" id="subject" name="subject" class="form-control">
                                            <label for="subject" class="">Subject</label>
                                        </div>
                                    </div>
                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-12">

                                        <div class="md-form">
                                            <textarea type="text" id="message" name="message" rows="2"
                                                class="form-control md-textarea"></textarea>
                                            <label for="message">Your message</label>
                                        </div>

                                    </div>
                                </div>
                                <!--Grid row-->

                            </form>

                            <div class="text-center text-md-left">
                                <a class="btn btn-primary"
                                    onclick="document.getElementById('contact-form').submit();">Send</a>
                            </div>
                            <div class="status"></div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6 text-center">

                        </div>
                        <!--Grid column-->

                    </div>

                </section>
                <!--Section: Contact v.2-->
            </div>
        </section>


        <!--=============Footer Start=============-->
        <footer class="text-center text-lg-start bg-primary py-3 text-white">

            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                <i class="bi bi-gem me-3"></i>Mirkuz HC
                            </h6>
                            <p>
                            <h5>Address:</h5>
                            <p> Marathon Building, 5th floor, Office No. 510</p>
                            <p>
                                Addis Ababa, Yeka sub city, Wereda 08
                            </p>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-4 mx-auto mb-4">
                            <!-- Links -->
                            <div class="row">
                                <div class="col-md-2">
                                    <h3><a href="facebook.com/mirkuzhc" class="me-4 text-reset">
                                            <i class="bi bi-facebook"></i>
                                        </a></h3><br>
                                </div>
                                <div class="col-md-2">
                                    <h3><a href="twitter.com" class="me-4 text-reset">
                                            <i class="bi bi-twitter"></i>
                                        </a></h3><br>
                                </div>
                                <div class="col-md-2">
                                    <h3><a href="gmail.com" class="me-4 text-reset">
                                            <i class="bi bi-google"></i>
                                        </a></h3><br>
                                </div>
                                <div class="col-md-2">
                                    <h3><a href="instagram.com" class="me-4 text-reset">
                                            <i class="bi bi-instagram"></i>
                                        </a></h3><br>
                                </div>
                                <div class="col-md-2">
                                    <h3><a href="linkedin.com" class="me-4 text-reset">
                                            <i class="bi bi-linkedin"></i>
                                        </a></h3><br>
                                </div>
                            </div>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Contact
                            </h6>
                            <p>
                                <i class="bi bi-envelope me-3"></i>
                                mirkuzhc@gmail.com
                            </p>
                            <p><i class="bi bi-phone me-3"></i><a href="tel:+251921379660"
                                    style="color: #fff; text-decoration:none;">
                                    +251 921-379660</a></p>
                            <p><i class="bi bi-print me-3"></i><a href="tel:+251966020039"
                                    style="color: #fff; text-decoration:none;">
                                    +251 966-020039</a></p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center py-4" style="background-color: rgba(0, 0, 0, 0.05);">
                © 2022 Copyright: Balageru Inc.
            </div>
            <!-- Copyright -->
        </footer>
        <!--=============Footer End=============-->
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>

</body>

</html>