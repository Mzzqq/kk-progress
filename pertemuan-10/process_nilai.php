<?php

include "koneksi.php";

//if (isset($_POST['proses-button'])) {
    $npm = $_POST['npm']; // mengarah ke name yang ada di tag input html
    $nilai = $_POST['nilai'];
    $repeat = $_POST['repeat'];
//      echo $npm . " " . $nilai;
    $huruf_mutu = "";

    $query = mysqli_query($koneksi, "INSERT INTO mahasiswa (nama_mahasiswa, prodi) 
                VALUES ('$nama_mhs','$prodi_mhs') ")
    or die(mysqli_error($koneksi));


    if (isset($nilai)) {
        if ($nilai >= 85) {
            $huruf_mutu = "A";
        } elseif ($nilai >= 75) {
            $huruf_mutu = "B";
        } elseif ($nilai >= 65) {
            $huruf_mutu = "C";
        } else {
            $huruf_mutu = "E";
        }
//        echo "Nilai mata kuliah anda adalah " . $huruf_mutu;
//        echo $npm . " Nilai mata kuliah anda adalah: " . $huruf_mutu . "<br>" ;
    }

    for ($i = 0; $i < $repeat; $i++) {
        echo $npm . " Nilai mata kuliah anda adalah: " . $huruf_mutu . "<br>" ;
    }


//        header("Location: " . $_SERVER['PHP_SELF']);
//        exit();

//}

