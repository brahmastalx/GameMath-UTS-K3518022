<?php

$servername = "localhost";
$username = "id13972401_jessyxslushyk3518022";
$password = "__Brahmastalx1050";
$dbname = "id13972401_db_game";

// koneksi ke database
$koneksi = mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_error());

// Fngsi tambah data (Create)
function tambah($nama, $email, $skor){
    $sql = "INSERT INTO tb_math (id, nama, email, skor) VALUES(NULL, '".$nama."','".$email."','".$skor."')";
    if (mysqli_query($GLOBALS['koneksi'], $sql)) {
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($GLOBALS['koneksi']);
      }
    mysqli_close($GLOBALS['koneksi']);
}


?> 