<?php session_start()?>

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

    ?>

    <div class="container-fluid vh-100 bg-danger row d-flex justify-content-center align-items-center" style="padding: 0; margin: 0;">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="text-bg-light px-4" style="border-radius: 1rem;">
	                <form action="kirim.php" method="POST">
                        <div class="form-outline my-4"
	                	    <label for="pesan" class="form-label">Kirim pesan untuk Cak Eri (ꈍᴗꈍ)♡</label>
	                	    <input id="pesan" name="pesan" type="text" class="form-control">
                        </div>
	                	<button name="kirim-pesan" value="kirim-pesan" class="btn btn-danger btn-block mb-4 w-100">Kirim</button>
	                </form>
                </div>
            </div>
        </div>
    </div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>
