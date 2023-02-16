<?php
session_start();
include('conn.php');

if (isset($_POST['delete_nurse'])) {
    $id = $_POST['delete_nurse'];

    try {
        $query = "DELETE FROM book WHERE id=:id";
        $statement = $conn->prepare($query);
        $data = [':id' => $id];
        $query_execute = $statement->execute($data);

        if ($query_execute) {
            $_SESSION['status'] = "Deleted Successfully";
            header('Location: manageBookings.php');
            exit(0);
        } else {
            $_SESSION['status'] = "Not Deleted";
            header('Location: manageBookings.php');
            exit(0);
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
?>
<!doctype html>
<html lang="en">

<head>
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
                            <a class="nav-link active" aria-current="page" href="login.php">
                                <i class="bi bi-person "></i>
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
    <div class="container">
    <div class="row">
      <div class="col-md-12 mt-4">
        <?php if (isset($_SESSION['status'])) : ?>
          <h5 class="alert alert-success alert-dismissible"><?= $_SESSION['status']; ?>
            <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button> -->
          </h5>
        <?php
          unset($_SESSION['status']);
        endif;
        ?>
      </div>
    </div>
  </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                <div class="card-header">
                        <h3>Booked Appointments List
                            <a href="display.php" class="btn btn-danger float-end">Back</a>
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
                                    <th>Delete</th>
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
                                            <td>
                                                <form action="manageBookings.php" method="post">
                                                    <p class="mx-3"></p>
                                                    <button type="submit" name="delete_nurse" value="<?= $row->id; ?>" class="btn btn-danger">Delete</button>
                                                </form>

                                            </td>
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
</body>

</html>