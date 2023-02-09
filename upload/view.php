<?php include "db_conn.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Nurses</title>
</head>
<body>
    <a href="index.php">&#8592;</a>
    <?php
                                $query = "SELECT * FROM nurses";
                                $statement = $conn->prepare($query);
                                $statement->execute();

                                $statement->setFetchMode(PDO::FETCH_OBJ); //PDO::FETCH_ASSOC
                                $result = $statement->fetchAll();
                                if ($result) {
                                    foreach ($result as $row) {
                                ?>
                                <div class="alb">
                                    <img src="uploads/<?=$row->image_url; ?>">
                                            <?= $row->name; ?>
                                </div>
                                    
                                        
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
</body>
</html>