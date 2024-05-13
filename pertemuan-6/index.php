<?php
    $npm = $_GET['npm']; // mengarah ke name yang ada di tag input html
    $nilai = $_GET['nilai'];
    echo $npm . " " . $nilai;
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
    <form action="" method="GET">
        <label>
            NPM <input type="number" name="npm" value="" />
        </label>
        <br>
        <label>
            Nilai <input type="number" name="nilai" value="" />
        </label>
        <br>
        <button type="submit" name="proses-button">Proses Data</button>
    </form>
</body>
</html>