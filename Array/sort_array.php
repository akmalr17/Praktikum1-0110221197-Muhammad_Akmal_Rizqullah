<?php

    //Array Buah
    $array_buah = [
        'p' => 'Pisang',
        'j' => 'Jeruk',
        'a' => 'Apel',
        'm' => 'Mangga'
    ];

    //Menampilkan array dengan foreach list
    echo '<ol>';
    foreach ($array_buah as $key => $value) {
        echo '<li>' .$key.' - '.$value. '</li>';
    }
    echo '</ol>';

    echo '<hr>';
    sort ($array_buah);
    echo '<hr/>';


    //Menampilkan array dengan foreach list
    echo '<ol>';
    foreach ($array_buah as $key => $value) {
        echo '<li>'.$key.' - ' .$value. '</li>';
    }
    echo '</ol>';
?>