<?php

    //Deklarasi Array
    $array_buah = ['Pisang', 'Jeruk', 'Apel', 'Mangga'];

    //Menampilkan Array
    echo 'Menampilkan data array 0 => ' .$array_buah[0]. '<br>';

    //Menampilkan Jumlah Array
    echo 'Menampilkan jumlah data array => ' .count($array_buah).'<br>';

    echo'<hr>';
    //Menampilkan Array Dengan Foreach
    foreach ($array_buah as $key => $value) {
        echo 'Menambahkan data array ke-' .$key.' = '.$value.'<br>';
    }
    echo'<hr>';

    //Menampilkan Array Dengan List
    echo '<ol>';
    foreach ($array_buah as $value) {
        echo '<li>'.$value.'</li>';
    }
    echo'</ol>';


?>