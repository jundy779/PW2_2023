<?php

    /* Variables System & User Variables
      Variables built in PHP (variables yang sudah ada di PHP)
    */
    echo $_SERVER["DOCUMENT_ROOT"];

    echo '<br><br>';
    /*
    Variables User
    Variables yang sudah dibuat oleh user
    */
    $name = 'Rul';
    $age = 15;
    $weight = 50.5;

    $name = 'Jundy';
    echo "Nama Saya adalah $name";

    /*
      Variables Constants
      Variables yang tidak bisa diubah nilainya
      1. Menggunakan Definition [define("fruit", "apel");
      2. Menggunakan const [const fruit = "Apel"];
      */
      define("SITE_NAME", "Elena");
      echo SITE_NAME;
?>