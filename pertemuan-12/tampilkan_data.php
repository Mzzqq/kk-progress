<?php
    include "koneksi.php";

    $proses = mysqli_query($db, "SELECT * FROM mahasiswa") or die(mysqli_error($db));