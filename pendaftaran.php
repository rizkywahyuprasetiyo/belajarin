<?php
$program_studi = [
    'Informatika',
    'Mesin',
    'Sistem Informasi'
];
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

    <title>Formulir Pendaftaran</title>
</head>
<div class="container">
    <h1 style="margin-top: 150px;">Formulir Pendaftaran</h1>
    <hr>
    <form>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama">
        </div>
        <div class="form-group">
            <label for="prodi">Pilih Program Studi</label>
            <select class="form-control" id="prodi">
                <?php for ($i = 0; $i < count($program_studi); $i++) : ?>
                    <option><?php echo $program_studi[$i]; ?></option>
                <?php endfor; ?>
            </select>
        </div>
    </form>
</div>

<body>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>