<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silaturahmi Online Bareng Cak Eri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <?php
    include "config.php";
    include "navbar.php";
    if (isset($_GET['bstatus']) && $_GET['bstatus'] === "failed") {
        echo "<h1 class='bg-danger text-center'>Failed to reply!</h1>";
    } else if (isset($_GET['bstatus']) && $_GET['bstatus'] === "success") {
        echo "<h1 class='bg-info text-center'>Successfully replied!</h1>";
    }
    echo "<div class=\"container-fluid vh-100 bg-danger row d-flex justify-content-center align-items-center\" style=\"padding: 0; margin: 0;\">";
    echo "<div class=\"row d-flex justify-content-center align-items-center\">";

    $sql = "SELECT * FROM Pesan;";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $sql = "SELECT * FROM User WHERE id = '{$row['user_id']}';";
        $userresult = mysqli_query($conn, $sql);

        echo "<div class=\"col-6 col-md-4 col-lg-3 col-xl-2 text-bg-light px-4 m-4\" style=\"border-radius: 1rem;\">";
        echo "<form action=\"balas.php\" method=\"POST\">";
        echo "<div class=\"form-outline my-4\">";
        if ($userresult) {
            $user = mysqli_fetch_assoc($userresult);
            echo "<h6>{$user["username"]} mengucapkan:</h6>";
        }
        echo "<p style=\"word-break: break-all;\">{$row['content']}</p>";
        if ($_SESSION['type'] === "P") {
            echo "<input id=\"pesan_id\" name=\"pesan_id\" type=\"hidden\" value=\"{$row['id']}\">";
            $sql2 = "SELECT * FROM Balasan WHERE pesan_id = '{$row['id']}';";
            $result2 = mysqli_query($conn, $sql2);
            while ($row2 = mysqli_fetch_assoc($result2)) {
                $sql3 = "SELECT * FROM User WHERE id = '{$row2['user_id']}';";
                $result3 = mysqli_query($conn, $sql3);
                if ($result3) {
                    $pembalas = mysqli_fetch_assoc($result3);
                    echo "<h6>{$pembalas['username']} membalas:</h6>";
                    echo "<p style=\"word-break: break-all;\">{$row2['content']}</p>";
                }
            }
            echo "<input id=\"content\" name=\"content\" type=\"text\" placeholder=\"Ketik balasan...\" class=\"form-control\">";
            echo "</div>";
            echo "<button name=\"Balas\" value=\"Balas\" class=\"btn btn-danger btn-block mb-4 w-100\">Balas</button>";
            echo "</form>";
            echo "</div>";
        } else {
            $sql2 = "SELECT * FROM Balasan WHERE pesan_id = '{$row['id']}';";
            $result2 = mysqli_query($conn, $sql2);
            while ($row2 = mysqli_fetch_assoc($result2)) {
                $sql3 = "SELECT * FROM User WHERE id = '{$row2['user_id']}';";
                $result3 = mysqli_query($conn, $sql3);
                if ($result3) {
                    $pembalas = mysqli_fetch_assoc($result3);
                    echo "<h6>{$pembalas['username']} membalas:</h6>";
                    echo "<p style=\"word-break: break-all;\">{$row2['content']}</p>";
                }
            }
            echo "</div>";
            echo "</form>";
            echo "</div>";
        }
    }
    echo "</div>";
    echo "</div>";
    ?>

</body>

</html>