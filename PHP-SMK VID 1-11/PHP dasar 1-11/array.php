<?php

// Array Dimensi

// $nama = array("Juan", "Mata", "Rashford", "Lingard", 100, 2.5);

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
//     "Mata" => "Surabaya",
//     "Lingard" => "Malang Raya",
//     "Rashford" => "Jakarta",
//     "Degea" => "Sidoarjo",
// );

$nama["Mata"] = "Surabaya";
$nama["Lingard"] = "Malang Raya";
$nama["Rashford"] = "Jakarta";
$nama["Degea"] = "Sidoarjo";
$nama["Juan"] = "Semarang";

var_dump($nama);
echo "<br>";

// echo $nama['Lingard'];

foreach ($nama as $key => $value) {

    echo $key . " => " . $value;
    echo "<br>";
}
