<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/library/bootstrap/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="/library/bootstrap/css/bootstrap-responsive.min.css" media="screen">
    <link rel="stylesheet" href="/library/assets/styles.css" media="screen">
    <script src="/library/vendors/modernizr-2.6.2-respond-1.1.0.min.js" defer></script>
    <title>6th</title>
</head>
<body>
<form action="process_nilai.php" method="POST">
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