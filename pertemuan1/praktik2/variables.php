<?php

    /* 
        Variable Sistem
        Variable build in PHP (variable yang sudah ada di php)
    */
    echo $_SERVER["DOCUMENT_ROOT"];

    echo '<br><br>';

    /* 
        Variable User 
        Variable yang dibuat oleh User
    */
    $name = 'Syav';
    $age = 15;
    $weight = 50.5;

    $name = 'Syavitri';

    echo " Nama saya adalah $name ";


    /*
         Variable konstan
    variable yang tidak bisa diubah nilainya
	  1. Menggunakan define | define('fruit', "Apel");
	  2. Menggunakan const  | const fruit = "Apel";
    */
    echo '<br><br>';

    define("SITE_NAME","Elena")
    echo SITE_NAME;
?>