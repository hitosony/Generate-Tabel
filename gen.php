<?php

$b =  $_POST['b'];
$k =  $_POST['k'];
$total =  $_POST['total'];
$width = $k * 50;
$baris = 0;

// Urutan terkecil ke terbesar
// $sel = 1;

// Urutan terbesar ke terkecil
$sel = $total;

// $data = '';
echo "<div align='center'>
    <strong>Jumlah Kolom =</strong> " . $k . " <br/>
    <strong>Jumlah Baris =</strong> " . $b . " <br />
    <br />
    <br />
    <table width=" . $width . " border=1>
    <tr>";

while ($baris < $b && $sel <= $total) {

    $cl = 0;

    while ($cl < $k) {

        if ($sel <= $total) {

            echo "<td><div align=center>" . $sel . "</div></td>";

            // Urutan terkecil ke terbesar
            // $sel++;

            // Urutan terbesar ke terkecil
            $sel--;
        }

        $cl++;
    }

    echo "</tr>";

    $baris++;
}
echo "</table>";


// echo $data;
die();
