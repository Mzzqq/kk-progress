<?php

    include "koneksi.php";

    $nama_mhs = $_POST['nama'];
    $prodi_mhs = $_POST['prodi'];
    $repeat = $_POST['ulangi'];

    $query = mysqli_query($db, "INSERT INTO mahasiswa (nama_mahasiswa, prodi) 
                VALUES ('$nama_mhs','$prodi_mhs') ")
    or die(mysqli_error($db));

    if($db){
        echo"
            <script>
                alert('Data Berhasil Disimpan')
                window.location.href='index.php'
            </script>";
    } else echo"
            <script>
                alert('Data Gagal Disimpan')
                window.location.href='index.php'
            </script>";


//    if (isset($nilai)) {
//        if ($nilai >= 85) {
//            $huruf_mutu = "A";
//        } elseif ($nilai >= 75) {
//            $huruf_mutu = "B";
//        } elseif ($nilai >= 65) {
//            $huruf_mutu = "C";
//        } else {
//            $huruf_mutu = "E";
//        }
////        echo "Nilai mata kuliah anda adalah " . $huruf_mutu;
////        echo $npm . " Nilai mata kuliah anda adalah: " . $huruf_mutu . "<br>" ;
//    }
//
//    for ($i = 0; $i < $repeat; $i++) {
//        echo $npm . " Nilai mata kuliah anda adalah: " . $huruf_mutu . "<br>" ;
//    }
//
//
////        header("Location: " . $_SERVER['PHP_SELF']);
////        exit();
//
////}

