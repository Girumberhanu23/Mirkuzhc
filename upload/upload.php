<?php
session_start();
include "../conn.php";
// Update data from database
// if (isset($_POST['update_nurse'])) {
//     $nurse_id = $_POST["id"];
//     $name = $_POST["name"];
// }

// try {
//     $query = $conn->prepare("UPDATE nurses SET name=:name, image_url=:new_img_name WHERE id=:nurse_id");
//     $statement = $conn->prepare($query);

//     $data = [
//         ':id ' => $nurse_id,
//         ':name ' => $name,
//         ':image_url' => $new_img_name
//     ];
//     $query_execute = $statement->execute($data);

//     if ($query_execute) {
//         $_SESSION['status'] = "Updated Successfully";
//         header('Location: view.php');
//         exit(0);
//     } else {
//         $_SESSION['status'] = "Not Updated";
//         header('Location: view.php');
//         exit(0);
//     }

// } catch (PDOException $e) {
//     echo $e->getMessage();
// }

if (isset($_POST['update_nurse'])) {
    if (isset($_POST['submit']) && isset($_FILES['my_image'])) {


        echo "<pre>";
        print_r($_FILES['my_image']);
        echo "</pre>";

        $name = $_POST["name"];
        $img_name = $_FILES['my_image']['name'];
        $img_size = $_FILES['my_image']['size'];
        $tmp_name = $_FILES['my_image']['tmp_name'];
        $error = $_FILES['my_image']['error'];

        if ($error === 0) {
            if ($img_size > 1250000) {
                $em = "Sorry, your file is too large.";
                header("Location: index.php?error=$em");
            } else {
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);

                $img_ex_lc = strtolower($img_ex);

                $allowed_exs = array("jpg", "jpeg", "png");

                if (in_array($img_ex_lc, $allowed_exs)) {
                    $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                    $img_upload_path = 'uploads/' . $new_img_name;
                    move_uploaded_file($tmp_name, $img_upload_path);

                    try {
                        $insert = $conn->prepare("UPDATE nurses SET name=:name, image_url=:new_img_name WHERE id=:nurse_id");
                        $statement = $conn->prepare($insert);

                        $data = [
                            ':id ' => $nurse_id,
                            ':name ' => $name,
                            ':image_url' => $new_img_name
                        ];
                        $query_execute = $statement->execute($data);
                        if ($query_execute) {
                            $_SESSION['status'] = "Updated Successfully";
                            header('Location: view.php');
                            exit(0);
                        }
                    } catch (PDOException $e) {
                        echo $e->getMessage();
                    }
                } else {
                    $em = "You can't upload files of this type";
                    header("Location: index.php?error=$em");
                }
            }
        } else {
            $em = "unknown error occured!";
            header("Location: index.php?error=$em");
        }
    } else {
        header("Location: index.php");
    }




// Insert into database
if (isset($_POST['submit']) && isset($_FILES['my_image'])) {


    echo "<pre>";
    print_r($_FILES['my_image']);
    echo "</pre>";

    $name = $_POST["name"];
    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];

    if ($error === 0) {
        if ($img_size > 1250000) {
            $em = "Sorry, your file is too large.";
            header("Location: index.php?error=$em");
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);

            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png");

            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                $img_upload_path = 'uploads/' . $new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                try {
                    $insert = $conn->prepare("INSERT INTO nurses(name, image_url)VALUE(?,?)");
                    if ($insert->execute([
                        $name, $new_img_name
                    ])) {
                        echo "Successful!!!";
                        header("location: view.php");
                    }
                } catch (PDOException $e) {
                    echo $e->getMessage();
                }
            } else {
                $em = "You can't upload files of this type";
                header("Location: index.php?error=$em");
            }
        }
    } else {
        $em = "unknown error occured!";
        header("Location: index.php?error=$em");
    }
} else {
    header("Location: index.php");
}
