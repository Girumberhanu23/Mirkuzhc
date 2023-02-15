<?php
require_once "conn.php";
if (isset($_POST["submit"])) {
    if ($_POST["username"] == "" or $_POST["email"] == "" or $_POST["password"] == "") {
        echo "<center><h1>Username, Email and Password cannot be empty ...!</h1></center>";
    } else {

        $email = strip_tags(trim($_POST["email"]));
        $password = strip_tags(trim($_POST["pwd"]));

        $query = $db->prepare("SELECT * FROM user WHERE email=? AND password=?");
        $query->execute(array($email, $password));
        $control = $query->fetch(PDO::FETCH_OBJ);
        if ($control > 0) {
            $_SESSION["username"] = $username;
            header("location: Home.php");
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
    <title>Login</title>
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
                    <h2 class="fw-bold  mb-2 mb-lg-0 mb-sm-0">MirkuzHc</h2>
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

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="offest-md-4">
                            <h1 class="text-center mt-4 mb-4 fw-bolder">Login</h1>
                            <form class="form-login" action="login.php" method="post">
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example1">Email address</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="E-mail" required />
                                </div>
                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label " for="form2Example2">Password</label>
                                    <!-- Simple link -->
                                    <a href="#!" class="float-end text-primary">Forgot password?</a>
                                    <input type="password" id="pwd" name="pwd" class="form-control" placeholder="Password" required />
                                </div>
                                <!-- 2 column grid layout for inline styling -->
                                <div class="row mb-4">
                                    <div class="col d-flex">
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                            <label class="form-check-label" for="form2Example31"> Remember me </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Submit button -->
                                <div class="col-md-12">
                                    <input type="submit" value="Sign in" class="col-12 btn btn-primary btn-block mb-4">
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
    <!--=============Footer Start=============-->
    <?php
    include('footer.php');
    ?>
    <!--=============Footer End=============-->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="module">
        // Import the functions you need from the SDKs you need
        import {
            initializeApp
        } from "https://www.gstatic.com/firebasejs/9.17.1/firebase-app.js";
        import {
            getAnalytics
        } from "https://www.gstatic.com/firebasejs/9.17.1/firebase-analytics.js";
        import {
            getAuth,
            createUserWithEmailAndPassword,
            signInWithEmailAndPassword
        } from "https://www.gstatic.com/firebasejs/9.17.1/firebase-auth.js";
        import {
            getDatabase,
            set,
            ref,
            update
        } from "https://www.gstatic.com/firebasejs/9.17.1/firebase-database.js";
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries

        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        const firebaseConfig = {
            apiKey: "AIzaSyCEMpGBVy_7Hq4unG37cg0aglUZ1zPj3Rw",
            authDomain: "mirkuz-home-care.firebaseapp.com",
            databaseURL: "https://mirkuz-home-care-default-rtdb.firebaseio.com",
            projectId: "mirkuz-home-care",
            storageBucket: "mirkuz-home-care.appspot.com",
            messagingSenderId: "466124354657",
            appId: "1:466124354657:web:8a2585f80e38b1076f2620",
            measurementId: "G-1FEDHCRYKJ"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const analytics = getAnalytics(app);
        const auth = getAuth();
        const database = getDatabase(app);

        signUp.addEventListener('click', (e) => {

            var email = document.getElementById('email').value;
            var password = document.getElementById('pwd').value;


            // createUserWithEmailAndPassword(auth, email, password)
            //     .then((userCredential) => {
            //         // Signed in 
            //         const user = userCredential.user;
            //         // ...
            //         set(ref(database, 'users/' + user.uId), {
            //                 email: email,
            //                 password: password
            //             })
            //             .then(() => {
            //                 // Data saved successfully!
            //                 alert('User Created Successfully!');
            //             })
            //             .catch((error) => {
            //                 // The write failed...
            //                 alert(error);
            //             });
            //     })
            //     .catch((error) => {
            //         const errorCode = error.code;
            //         const errorMessage = error.message;
            //         // ..
            //         alert(errorMessage);
            //     });
            signInWithEmailAndPassword(auth, email, password)
                .then((userCredential) => {
                    // Signed in 
                    const user = userCredential.user;
                    // ...
                    var lgDate = new Date();
                    update(ref(database, 'users/' + user.uId), {
                            last_login: lgDate
                        })
                        .then(() => {
                            // Data saved successfully!
                            alert('User logged in Successfully!');
                        })
                        .catch((error) => {
                            // The write failed...
                            alert(error);
                        });
                })
                .catch((error) => {
                    const errorCode = error.code;
                    const errorMessage = error.message;
                    alert(errorMessage);
                });

        });
    </script>

</body>

</html>