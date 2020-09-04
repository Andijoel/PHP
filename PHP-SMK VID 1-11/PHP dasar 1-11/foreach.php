<?php

// $nama = array('Rizky', 'Rizkyo', 'Risky', 100);

// var_dump($nama);
// echo '<br>';

// foreach ($nama as $key) {
//     echo $key . '<br>';
// }


$nama = array(
    "Rizky" => "Surabaya",
    "Rizkyo" => "Malang",
    "Risky" => "Sidoarjo"

);

var_dump($nama);
echo '<br>';

foreach ($nama as $key => $value) {
    echo $key . '-' . $value;
    echo '<br>';
}
