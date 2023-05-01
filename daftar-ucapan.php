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
    include "navbar.php";
    echo "<div class=\"container-fluid vh-100 bg-danger row d-flex justify-content-center align-items-center\" style=\"padding: 0; margin: 0;\">";
    echo "<div class=\"row d-flex justify-content-center align-items-center\">";
    
    $sql = "SELECT * FROM Pesan";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class=\"col-6 col-md-4 col-lg-3 col-xl-2 text-bg-light px-4 m-4\" style=\"border-radius: 1rem;\">";
            echo "<form action=\"balas.php\" method=\"POST\">";
            echo "<div class=\"form-outline my-4\">";
            echo "<h6>{$row["user_id"]} bilang:</h6>";
            echo "<p style=\"word-break: break-all;\">{$row["pesan"]}</p>";
            echo "<input id=\"email\" name=\"email\" type=\"text\" placeholder=\"Email\" class=\"form-control\">";
            echo "</div>";
            echo "<button name=\"Balas\" value=\"Balas\" class=\"btn btn-danger btn-block mb-4 w-100\">Balas</button>";
            echo "</form>";
            echo "</div>";
        }
    }
    echo "</div>";
    echo "</div>";
?>
    
</body>

</html>
