<?php
session_start();
///register page
require_once "conn.php";


if (isset($_POST["submit"])) {
  ///we are grabbing the data
  $name = $_POST["name"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $date = $_POST["date"];
  $subcity = $_POST["subcity"];
  $city = $_POST["city"];
  $house = $_POST["house"];
  $passport = $_POST["passport"];
  $service = $_POST["service"];
  //to check if email, exists
  try {

    $check = $conn->prepare("SELECT * FROM book WHERE email=?");
    $check->execute([$email]);
    if ($check->rowCount() > 0) {
      $_SESSION['status']= "Email exists try another!";
    
    } else {

      try {
        $insert = $conn->prepare("INSERT INTO book(name,phone,email,date,subcity,city,house,passport,service)VALUE(?,?,?,?,?,?,?,?,?)");
        if ($insert->execute([
          $name, $phone, $email, $date, $subcity, $city, $house, $passport, $service
        ])) {
          $_SESSION['status']= "Appointment Added Successfully!";
          header('Location: book.php#msg');
        }
      } catch (PDOException $e) {
        $_SESSION['status']= $e->getMessage();
    
      }
    }
  } catch (PDOException $e) {
    $_SESSION['status']= "error" . $e->getmessage();
    
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
  <title>Book Appointment</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">
  <!-- End Bootstrap CSS -->
  <!--Google Fonts-->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!--Custom Css-->
  <link rel="stylesheet" href="./CSS/style.css">
  <!--End Custom Css-->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/datepicker.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
    .inner-layer {
      overflow: hidden;
    }
  </style>
</head>

<body style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url(img/firstAid.jpg) !important;
background-size: cover !important;
background-attachment:fixed !important;">

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
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.html">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="book.php">Book Appointment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#contact">Contact us</a>
            </li>
          </ul>
          <ul class="navbar-nav mb-2 mb-lg-0 action-menu">
            <li class="nav-item">
              <a class="nav-link" href="login.php">
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
  <!--=============Form Start=============-->
  <section id="form">
    <div class="container-fluid">
      <div class="row no-margin">
        <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12">
          <div class="content">
            <h1>Book Your Appointment with Us!</h1>
            <p>We are ready to take your appointment. Book with us by filling out the following form. </p>
            <h3>For Help Call : <a href="tel:+251921379660" style="color: #fff; text-decoration:none;">
                +251 921-379660</a><br>
              <a href="tel:+251966020039" style="color: #fff; text-decoration:none;">
                +251 966-020039</a>
            </h3>
          </div>
        </div>
        <div class="col-lg-6 col-md-7 col-sm-12 col-xs-12 ">
          <form class="form-login " action="book.php" method="post">
            <div class="form-data rounded bg-transparent" style="box-shadow: 5px 5px 5px 5px rgba(0, 0, 0, 0.6);">
              <div class="form-head text-white">
                <h1>Book Appointment</h1>
              </div>
              <div class="form-body text-white">
                <h5>Patient Detail</h5>
                <div class="row form-row">
                  <input type="text" placeholder="Enter Full name &#42;" name="name" class="form-control" required>
                </div>
                <div class="row form-row">
                  <input type="tel" placeholder="Enter Mobile Number &#42;" name="phone" class="form-control" required>
                </div>
                <div class="row form-row">
                  <input type="email" placeholder="Enter Email Address" name="email" class="form-control">
                </div>
                <div class="row form-row">
                  <input id="dat" type="text" name="date" placeholder="Appointment Date &#42;" class="form-control" required>
                </div>

                <h5>Address Detail</h5>

                <div class="row form-row">
                  <div class="col-sm-6">
                    <select name="subcity" id="subcity" class="form-control" required>
                      <option hidden>Select Subcity &#42;</option>
                      <option value="Addis Ketema">Addis Ketema</option>
                      <option value="Akaki Kality">Akaki Kality</option>
                      <option value="Arada">Arada</option>
                      <option value="Bole">Bole</option>
                      <option value="Gullele">Gullele</option>
                      <option value="Kirkos">Kirkos</option>
                      <option value="Kolfe Keranio">Kolfe Keranio</option>
                      <option value="Lideta">Lideta</option>
                      <option value="Nifas Silk Lafto">Nifas Silk Lafto</option>
                      <option value="Yeka">Yeka</option>
                    </select>
                  </div>
                  <div class="col-sm-6">
                    <select name="city" id="city" class="form-control" required>
                      <option hidden>Select City &#42;</option>
                      <option value="Addis Ababa">Addis Ababa</option>
                      <option value="Bahirdar">Bahirdar</option>
                      <option value="Jimma">Jimma</option>
                      <option value="Arba Minch">Arba Minch</option>
                      <option value="Hawassa">Hawassa</option>
                      <option value="Arba Minch">Adama</option>
                    </select>
                  </div>
                </div>
                <div class="row form-row">
                  <div class="col-sm-6">
                    <input type="number" name="house" id="house" placeholder="Enter House Number" class="form-control">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" id="passport" placeholder="Passport Number" name="passport" class="form-control">
                  </div>
                </div>

                <h5>Service Detail</h5>

                <div class="row form-row">
                  <select name="service" id="service" class="form-control" required>
                    <option hidden>Select Service &#42;</option>
                    <option value="Injection">Injection</option>
                    <option value="Wound Dressing">Wound Dressing</option>
                    <option value="Catheterization">Catheterization</option>
                    <option value="Naso-gastric Tube insertion">Naso-gastric Tube insertion</option>
                    <option value="Laboratory Specimen Collection">Laboratory Specimen Collection</option>
                    <option value="Doctor Visit">Doctor Visit</option>
                    <option value="Schedule for Hospital visit">Schedule for Hospital visit</option>
                    <option value="Other">Other</option>
                  </select>
                </div>
                <div class="row form-row">
                  <textarea name="otherService" id="otherService" cols="30" placeholder="Please specify your requested service if not mentioned above." rows="3"></textarea>
                </div>
                <div class="row form-row">
                  <input type="submit" value="Book Appointment" name="submit" class="col-12 btn btn-primary btn-block mb-4">

                </div>
                <div class="row">
                <span id="msg" class="text-center w-responsive"><?php 
                if (isset($_SESSION['status'])) {
                  echo $_SESSION['status'];
                  unset($_SESSION['status']);
                }
                
                ?></span>
                </div>

              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </section>
  <!--=============Form End=============-->


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.js"></script>

  <script>
    $(document).ready(function() {
      $("#dat").datepicker();
    })
  </script>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
<?php
include("footer.php");
?>

</html>