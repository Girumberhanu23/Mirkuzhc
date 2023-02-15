<?php
///register page
require_once "conn.php";


if (isset($_POST["submit"])) {
    ///we are grabbing the data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    //to check if email, exists
    try {

        $check = $conn->prepare("SELECT * FROM user WHERE email=?");
        $check->execute([$email]);
        if ($check->rowCount() > 0) {
            echo "Email exists try another";
        } else {

            try {
                $insert = $conn->prepare("INSERT INTO user(name,email,password)VALUE(?,?,?)");
                if ($insert->execute([
                    $name, $email, $pwd
                ])) {
                    echo "Successful!!!";
                    header("location: display.php");
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    } catch (PDOException $e) {

        echo "Error" . $e->getmessage();
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
    <title>Register</title>
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
    <!--=============Header Start=============-->
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
    <!--=============Register Start=============-->
    <div class="container login-form mb-5">
        <div class="row mt-4 justify-content-center">

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="offest-md-4">
                            <h1 class="text-center mt-4 mb-4 fw-bolder">Register</h1>
                            <form class="form-login" action="register.php" method="post">
                                <!-- Name input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label " for="name">Full Name</label>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Full Name" required/>
                                </div>
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="email">Email address</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required/>
                                </div>
                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label " for="pwd">Password</label>
                                    <input type="password" id="pwd" name="pwd" class="form-control" placeholder="Password" required/>
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
                                <div class="">
                                        <input type="submit" value="Create New Account" name="submit" class="col-12 btn btn-primary btn-block mb-4">
                                </div>
                                <p class="text-center"> Already have account?<a href="login.php" class="text-primary">
                                        Sign in</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--=============Register End=============-->
    <!--=============Footer Start=============-->
    <?php
    include('footer.php');
    ?>
    <!--=============Footer End=============-->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>