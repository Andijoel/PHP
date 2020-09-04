<?php

// Array Dimensi

// $nama = array("Rizky", "Risky", "Riskyo", "Rizkyo", 100, 2.5);

// var_dump($nama);
// echo "<br>";

// echo $nama[5];
// echo "<br>";

// for ($i = 0; $i < 6; $i++) {
//     // echo $i;
//     echo $nama[$i] . "<br>";
// }

// foreach ($nama as $key) {
//     echo $key . '<br>';
// }



// Array asosiatif

// $nama = array(
//     "Rizky" => "Surabaya",
//     "Risky" => "Malang Raya",
//     "Riskyo" => "Jakarta",
//     "Rizkyo" => "Sidoarjo",
// );

$nama["Rizky"] = "Surabaya";
$nama["Risky"] = "Malang Raya";
$nama["Riskyo"] = "Jakarta";
$nama["Rizkyo"] = "Sidoarjo";
$nama["Rizkyi"] = "Semarang";

var_dump($nama);
echo "<br>";

// echo $nama['Rizkyo'];

foreach ($nama as $key => $value) {

    echo $key . " => " . $value;
    echo "<br>";
}
