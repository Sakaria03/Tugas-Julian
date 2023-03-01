<?php

$kalimat = "ibu ratna antar ubi";

// Ubah menjadi lowercase dan hapus spasi
$kalimat = str_replace(" ", "", strtolower($kalimat));

if ($kalimat == strrev($kalimat)) {
    echo "Kalimat ini adalah palindrom.";
} else {
    echo "Kalimat ini bukan palindrom.";
}
?>