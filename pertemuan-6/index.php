<?php

$var1 = $_GET["inputan_pertama"];
echo $var1;

?>

<html>
<header>
    <title>Pertemuan 7</title>
</header>
<body>
<form action="" method="get">
    <label for="inputan_pertama">NPM</label>
    <input type="text" name="inputan_pertama" value="">
    <br>
    <label for="inputan_pertama">NILAI</label>
    <input type="text" name="nilai" value="">
    <br>
    <label for="inputan_pertama">ULANGI</label>
    <input type="number" name="ulangi" value="">
    <br>
    <button type="submit" name="process_data">PROSES DATA</button>
</form>
</body>
</html>
