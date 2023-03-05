<?php
include('conn.php');

?>
<!doctype html>
<html lang="en">

<head>
    <link rel="shortcut icon" type="x-icon" href="img/Logo.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">
    <!-- End Bootstrap CSS -->
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!--Custom Css-->
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Admin Panel</title>
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
                    <img src="img/Logo.png" alt="" width="90px" height="90px">
                    &nbsp;<strong>Mirkuz hc</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="bi bi-list"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="display.php">Booked Appointments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="upload/view.php">Nurses</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mb-2 mb-lg-0 action-menu">
                        <li class="nav-item">
                            <a class="nav-link" onclick="logout()" href="login.php" style="cursor: pointer;">
                                <i class="bi bi-person "></i>Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End-->
    </header>
    <!--=============Header End=============-->
    <div>
        <!--<center><h1>Welcome <?php echo $_SESSION["username"]; ?></h1></center> -->
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Booked Appointments List
                            <a href="manageBookings.php" class="btn btn-primary float-end">Manage Bookings</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                    <th>Subcity</th>
                                    <th>City</th>
                                    <th>House</th>
                                    <th>Passport</th>
                                    <th>Service</th>
                                    <th>Booked On</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM book";
                                $statement = $conn->prepare($query);
                                $statement->execute();

                                $statement->setFetchMode(PDO::FETCH_OBJ); //PDO::FETCH_ASSOC
                                $result = $statement->fetchAll();
                                if ($result) {
                                    foreach ($result as $row) {
                                ?>
                                        <tr>
                                            <td><?= $row->Name; ?></td>
                                            <td><a href="tel: <?= $row->Phone; ?>"><?= $row->Phone; ?> </a></td>
                                            <td><?= $row->Email; ?></td>
                                            <td><?= $row->Date; ?></td>
                                            <td><?= $row->Subcity; ?></td>
                                            <td><?= $row->City; ?></td>
                                            <td><?= $row->House; ?></td>
                                            <td><?= $row->Passport; ?></td>
                                            <td><?= $row->Service; ?></td>
                                            <td><?= $row->bookedOn; ?></td>
                                        </tr>
                                    <?php
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td colspan="8">No Record Found</td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module">
        // Import the functions you need from the SDKs you need
        import {
            initializeApp
        } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-app.js";
        import {
            getAuth,
            createUserWithEmailAndPassword,
            signInWithEmailAndPassword,
            signOut
        } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-auth.js";
        import {
            getDatabase,
            set,
            ref,
            update
        } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-database.js";


        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries

        // Your web app's Firebase configuration
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
        const auth = getAuth();
        const database = getDatabase(app);


        function logOut() {
            firebase.auth().signOut()
        }
        firebase.auth().onAuthStateChanged((user) => {
            if (user) {
                console.log(user)
            } else {
                console.log('signout success')
                M.toast({
                    html: "signout success",
                    classes: "green"
                })
            }
        });
    </script>
</body>

</html>