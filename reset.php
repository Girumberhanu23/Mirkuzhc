<!DOCTYPE html>

<html lang="en">

<head>
    <link rel="shortcut icon" type="x-icon" href="img/Logo.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reset Password</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">
    <!-- End Bootstrap CSS -->

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!--Custom Css-->
    <link rel="stylesheet" href="./CSS/style.css">
    <!--End Custom Css-->
</head>

<body>

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
                            <a class="nav-link" href="about.php">About Us</a>
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
    <h1 class="text-center mt-4 mb-4 fw-bolder">Admin Panel</h1>
    <div class="container login-form mb-5">
        <div class="row mt-4 justify-content-center">

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="offest-md-4">
                            <h1 class="text-center mt-4 mb-4 fw-bolder text-primary">Password Recovery</h1>
                            <form class="form-login" action="javascript:void(0)">
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example1">Email address</label>
                                    <input type="text" class="form-control resetEmail" placeholder="Enter Email" name="resetEmail" id="resetEmail" required>
                                </div>



                                <!-- Submit button -->
                                <div class="col-md-12">
                                    <input type="Button" id="submitData" name="submitData" class="registerbtn col-12 btn btn-primary btn-block mb-4" onClick="this.value='Sending you a reset link..';this.disabled=true;" value="Reset Password">
                                </div>
                                <!-- <p class="text-center"> Don't have account yet?<a href="register.php" class="text-primary"> Sign up</a></p> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=============Login End=============-->
    <?php
    include('footer.php');
    ?>
</body>

</html>

<script type="module">
    let submitData = document.getElementById("submitData");
    let forgetEmail = document.querySelector(".resetEmail");

    import {
        app
    } from "./firebase-config.js";
    import {
        getAuth,
        sendPasswordResetEmail
    } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-auth.js";

    const auth = getAuth(app);

    submitData.addEventListener('click', (e) => {
        sendPasswordResetEmail(auth, forgetEmail.value)
            .then(() => {
                forgetEmail = "";

                
                swal({
                    title: "Congratulations!",
                    text: "Your Password has been reset! Please check your email",
                    icon: "success",
                    button: "Ok",
                });
            })
            .catch((error) => {
                const errorCode = error.code;
                const errorMessage = error.message;


                swal({
                    title: "Sorry!",
                    text: "Couldn't find your email address! Please enter a registered email!",
                    icon: "error",
                    button: "Ok",
                });
            });
    })
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>