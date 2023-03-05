<?php include "upload/db_conn.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" type="x-icon" href="img/Logo.png">
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="mirkuz">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Mirkuz Home Based Health Care Service">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.mirkuzhc.care/">
    <meta property="og:image" content="img/Logo.png">
    <meta property="og:site_name" content="Mirkuz Home Based Health Care Service">
    <meta property="og:description" content="Mirkuz Home Based Health Care PLC is a home-based health care company, established in year 2013 E.C.">


    <title>About Us</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <!-- End Bootstrap CSS -->

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!--Custom Css-->
    <link rel="stylesheet" href="./CSS/style.css">
</head>

<body style="background-color: #FBFCF5;">
    <!--Header Start-->
    <header>
        <section id="topbar" class="mb-2 mb-lg-0 mb-sm-0 d-none d-lg-flex align-items-center pt-2 pb-2 bg-primary text-white topbar-transparent">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6   text-start">

                        <i class="bi bi-clock"></i> Mon-Sat: 8:00 AM - 6:00 PM
                    </div>
                    <div class="col-md-6 text-end">
                        Call us: <span class="px-3"><i class="bi bi-phone "></i> <a href="tel:+251921379660" style="color: #fff;"> +251 921-379660</a></span>
                    </div>
                </div>
            </div>
        </section>
        <!--Navbar Start-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="img/Logo.png" alt="" width="90px" height="90px">
                    &nbsp;<strong>Mirkuz hc</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="bi bi-list"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="about.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.php">Services</a>
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
    <!--About Us Start-->
    <section id="about" class="about mt-5">
        <div class="about-title text-center">
            <h1> ABOUT US </h1>
            <hr class="mx-auto" style="width: 100px; height: 2px; background: #0D6EFD;">
        </div>
        <div class="container-fluid">
            <!--Section description-->
            <div class="row  pt-5 pb-5">
                <div class="col-md-5 align-items-stretch ">
                    <!-- <img src="img/office.jpg" alt="Treating patients" style="height: 100%; width:100%;"> -->
                    <img src="img/patient.jpeg" alt="Treating patients" class="h-100 w-100">
                </div>
                <div class="col-md-7 d-flex flex-column justify-content-center align-items-stretch bg-primary">

                    <div class="content text-white my-3">
                        <h3 class="text-white mt-2">Our Story</h3>
                        <p class="text-white text-justify">Mirkuz Home Based Health Care PLC is a home-based health care company,
                            established in year 2013 E.C. This company founded by a one intensive care unit nurse, have experience on
                            critical and comatose patients, hoping to extended intensive nursing care to client&#39;s home,
                            with vast experience, heavily trained professionals and portable devices. <br><br>
                            In 2013 E.C our company had taken the License from Addis Ababa City Administration, Yeka
                            Sub-City Food, Medicine, Health Care Administration and Control Authority, and started the
                            work officially by some medical equipment&#39;s and some clinical nurses.</p>
                    </div>

                </div>
            </div>
            <div class="row  pt-5 pb-5">

                <div class="col-md-7 d-flex flex-column justify-content-center align-items-stretch bg-primary" data-aos="fade-right">

                    <div class="content text-white">
                        <h3 class="text-white">Our Story</h3>
                        <p class="text-white text-justify">Here in Mirkuz home based health care we provide care and nursing support
                            across Addis Ababa
                            and nearby cities. We believe quality in home care begins with respect and a good attitude.
                            <br><br>
                            Our Company has a properly Organized Document that Related to our Staffs and Clients
                            (Service Users). We are committed to achieving the highest standards in the delivery of
                            private Health Care, by providing reliable Health Care Services that best meets the needs
                            and expectations of our clients.
                        </p>
                    </div>

                </div>
                <div class="col-md-5 align-items-stretch" data-aos="fade-left">
                    <img src="img/imageBp.jpg" alt="Treating patients" class="h-100 w-100">
                </div>
            </div>
            <div class="row  pt-5 pb-5">
                <div class="col-md-5 align-items-stretch" data-aos="fade-right">
                    <img src="img/needle.jpg" alt="Treating patients" class="h-100 w-100">
                </div>
                <div class="col-md-7 d-flex flex-column justify-content-center align-items-stretch bg-primary"  data-aos="fade-left">

                    <div class="content">
                        <h3 class="text-white">Our Story</h3>
                        <p class="text-white  text-justify">We listen to our clients, customize our services to their personal
                            situations, and deliver
                            care that is focused on improving their quality of life, health and well-being. All clients
                            will be treated with dignity, compassion, empathy, honesty and integrity. We have respect
                            for all religions, ethnicities, sexual orientations, ages and disabilities. We continually
                            evaluate our service and our care givers in order to be responsive and proactive to issues
                            that may affect the quality of our service.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section id="about">
        <div class="content-box-lg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="about-item shadow-lg rounded h-75" data-aos="fade-down">

                            <h3 class="text-center"><i class="fa fa-book"></i></br>Vision</h3>
                            <hr>
                            <p>
                            <ul class="text-justify">
                                <li>To be known and valued for providing the highest standard of in-home care and
                                    facility nursing care in Ethiopia and East Africa as a result of our high
                                    standard of excellence, culture of innovation, and through our compassionate and
                                    client-centered approach to patient care and their Loved Ones.</li>
                                <li>To be uniquely defined as a dynamic company that provides health care services
                                    designed to address the changing needs of our clients and communities in a
                                    timely manner.</li>
                                <li>To maintain an organizational climate that will promote, motivate, and elevate
                                    the level of nursing home care provided by our staff.</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="about-item shadow-lg rounded h-75" data-aos="fade-down">


                            <h3 class="text-center"><i class="fa fa-globe"></i></br>Mission</h3>
                            <hr>
                            <p class="text-justify">Passion for Life. Keeping the client&#39;s health, quality of life, and well-being
                                central in the design and delivery of compassionate and dignified health care.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h2 class="text-center"> Values </h2>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="about-item shadow-lg rounded h-75" data-aos="fade-up">
                            <h3 class="text-center"><i class="fa fa-user-shield"></i></br>Safety</h3>
                            <hr>
                            <p class="pt-2 text-justify">Mirkuz Home Based Health Care Service strives to manage critical aspects of risks to
                                clients and staffs. Safety is a top priority for us, and we are dedicated to being
                                proactive in support of it. We passionately care about the safety of our clients and
                                staffs, and we recognize that we must be diligent in identifying potential safety
                                issues. We place a strong emphasis on increasing awareness and knowledge on safety,
                                so that our staff can effectively manage risks and work safety.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="about-item shadow-lg rounded h-75" data-aos="fade-down">
                            <h3 class="text-center"><i class="fa fa-group-arrows-rotate"></i></br>Community</h3>
                            <hr>
                            <p class="pt-2 text-justify">We are determined to have strong, mutually beneficial relationships with our
                                community partners and our community. Everyone in our organization contributes on
                                some level to the quality of the relationships that we are building. Being socially
                                responsible is a part of the equation. We want to make a positive difference by
                                actively seeking input from our clients and the community. We must be good
                                listeners&#39;, personal and approachable. The more we understand-the better we can
                                serve and anticipate services that are beneficial and needed in our communities.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="about-item shadow-lg rounded h-75" data-aos="fade-up">
                            <h3 class="text-center"><i class="fa fa-check"></i></br>Integrity and Ethics</h3>
                            <hr>
                            <p class="pt-2 text-justify">We are honest, accountable, transparent and responsible in our approach. We embrace
                                high ethical standards, complete honesty, and fairness to our clients, staffs and
                                community partners. We have ethical policies and procedures in place, as well as a
                                framework to guide and support our staff to high ethical standards. We investigate
                                all violations and complaints, and will take remedial action. Our service is
                                absolutely private and totally confidential.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Us End-->

    <!----------- Our team Start --------->
    <section id="nurses" class="mb-5 container">
        <div class="col-lg-12 col-md-12 col-xs-12 text-center p-5">
            <h1 class="mb-3 font-weight-bold">Our team</h1>
            <hr class="mx-auto" style="width: 140px; height: 2px; background: #0D6EFD;">
            <p class="mt-4">Meet our team of experienced health professionals. All professionals working with us are certified. Take a glance at some of the professionals available today.</p>
        </div>
        <div class="d-flex justify-content-around flex-wrap">
            <?php
            $query = "SELECT * FROM nurses";
            $statement = $conn->prepare($query);
            $statement->execute();

            $statement->setFetchMode(PDO::FETCH_OBJ); //PDO::FETCH_ASSOC
            $result = $statement->fetchAll();
            if ($result) {
                foreach ($result as $row) {
            ?>
                    <div class="work-list">
                        <a href="upload/uploads/<?= $row->image_url; ?>" target="_self">
                            <div class="work shadow ">
                                <img class="card-img-top" src="upload/uploads/<?= $row->image_url; ?>" height=240 alt="Card image cap">
                                <h3 class="card-title text-center pb-5 mt-3"><i class="fa fa-duotone fa-stethoscope"> </i> <?= $row->name; ?></h3>
                                <div class="layer">
                                    <h3><i class="fa fa-duotone fa-stethoscope"> </i> <?= $row->name; ?></h3>
                                    <p>Display the license of this health professional.</p>

                                </div>
                            </div>
                        </a>
                    </div>


                <?php
                }
            } else {
                ?>

                <p class="card-text">No Record Found!</p>
            <?php
            }
            ?>
        </div>
    </section>
    <!----------- Our team End --------->

    <!--=============Footer Start=============-->
    <?php
    include('footer.php');
    ?>
    <!--=============Footer End=============-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 150,
            duration: 1000
            
        });
    </script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>

</html>