<?php

// Array Dimensi

// $nama = array("Lingard", "Rooney", "Mata", "Degea", 100, 2.5);

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
//     "Lingard" => "Surabaya",
//     "Rooney" => "Malang Raya",
//     "Mata" => "Jakarta",
//     "Degea" => "Sidoarjo",
// );

$nama["Lingard"] = "Surabaya";
$nama["Rooney"] = "Malang Raya";
$nama["Mata"] = "Jakarta";
$nama["Degea"] = "Sidoarjo";
$nama["Rashford"] = "Semarang";

var_dump($nama);
echo "<br>";

// echo $nama['Greenwood'];

foreach ($nama as $key => $value) {

    echo $key . " => " . $value;
    echo "<br>";
}
