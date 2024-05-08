<?php
    $myName = "Rizky Fahrureza";
    $numberList = array(1,2,3,4,5);
    $result = 0;
    // foreach ($numberList as $i) {
    //     echo $i;
    //     echo "</br>";
    // }


    // Sum an array
    // foreach ($numberList as $i) {
    //     $result += $i;
    // }

    // echo $result;


    // // Mean of array
    // foreach ($numberList as $i){
    //     $result += $i;
    // }

    // echo $numberList[0];
    // echo $result / count($numberList);

    
    // check space
    // for ($i = 0; $i < strlen($myName); $i++) {
    //     if ($myName[$i] == ' ') {
    //         echo "ada spasi";
    //     }
    // }

    
    // check price
    // $price = 1500000;
    // if ($price < 1000000) {
    //     echo "Murah";
    // } else if ($price <= 1500000) {
    //     echo "Sedang";
    // } else {
    //     echo "Mahal";
    // }


    // Letter checking
    // $letter = 'C';
    // if ($letter == 'A') {
    //     echo "Baik";
    // } else if ($letter == 'B') {
    //     echo "Cukup";
    // } else {
    //     echo "Buruk";
    // }


    // Even number
    // for ($i = 1; $i <= 1000; $i++) {
    //     if ($i % 2 == 0) {
    //         echo $i . "<br>";
    //         // echo "<br>";
    //     }
    // }


    // Even Checker Function
    function evenNumber($number) {
        if ($number % 2 == 0) {
            return $number;
        }
    }

    echo evenNumber(10);

?>