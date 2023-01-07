<?php
require_once "conn.php";
if (isset($_POST["submit"])) {
    if($_POST["username"]== "" or $_POST["email"]== "" or $_POST["password"]== ""){
        echo "<center><h1>Username, Email and Password cannot be empty ...!</h1></center>";
    }else{
        $name = trim($_POST["name"]);
        $username = strip_tags(trim($_POST["name"]));
        $password = strip_tags(trim($_POST["password"]));

        $query=$db->prepare("SELECT * FROM user WHERE email=? AND password=?");
        $query->execute(array($email,$password));
        $control=$query->fetch(PDO::FETCH_OBJ);
        if($control>0){
            $_SESSION["username"]=$username;
            header("Location:display.php");
        }
        echo "<center><h1>incorrect Password or Email...!</h1></center>";
    }
}
 
$conn = null;

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">
    <!-- End Bootstrap CSS -->

    <!--Google Fonts-->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

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
                <a class="navbar-brand" href="index.html">
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
                            <a class="nav-link" href="index.php">Home</a>
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
                            <a class="nav-link active" aria-current="page" href="login.php">
                                <i class="bi bi-person "></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--Navbar End-->
    </header>
    <!--=============Header End=============-->
    <!--=============Login Start=============-->
    <div class="container login-form">
        <div class="row mt-4 justify-content-center">

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="offest-md-4">
                            <h1 class="text-center mt-4 mb-4 fw-bolder">Login</h1>
                            <form class="form-login" action="login.php" method="post">
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example1">Email address</label>
                                    <input type="email" id="form2Example1" name="email" class="form-control" placeholder="E-mail" required/>
                                </div>
                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label " for="form2Example2">Password</label>
                                    <!-- Simple link -->
                                    <a href="#!" class="float-end text-primary">Forgot password?</a>
                                    <input type="password" id="form2Example2" name="pwd" class="form-control"
                                        placeholder="Password" required/>
                                </div>
                                <!-- 2 column grid layout for inline styling -->
                                <div class="row mb-4">
                                    <div class="col d-flex">
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="form2Example31"
                                                checked />
                                            <label class="form-check-label" for="form2Example31"> Remember me </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Submit button -->
                                <div class="col-md-12">
                                        <input type="submit" value="Sign in"class="col-12 btn btn-primary btn-block mb-4">
                                </div>
                                <p class="text-center"> Don't have account yet?<a href="register.php"
                                        class="text-primary"> Sign up</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=============Login End=============-->
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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>