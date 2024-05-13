<?php
    $npm = $_POST['npm']; // mengarah ke name yang ada di tag input html
    $nilai = $_POST['nilai'];
    $repeat = $_POST['repeat'];
//    echo $npm . " " . $nilai;
    $huruf_mutu = "";
    if ()
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>6th</title>
</head>
<body>
    <form action="" method="POST">
        <label>
            NPM <input type="number" name="npm" value="" />
        </label>
        <br>
        <label>
            Nilai <input type="number" name="nilai" value="" />
        </label>
        <br>
        <label>
            Ulangi <input type="number" name="repeat" value="" />
        </label>
        <br>
        <button type="submit" name="proses-button">Proses Data</button>
    </form>
</body>
</html>