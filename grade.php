<?php 
    $nilai = $_POST["nilai"];

    include "index.php";
    if($nilai <=100 && $nilai >= 80 ){
        echo "Nilai - A";
    }else if($nilai <=79 && $nilai >= 60){
        echo "Nilai - B";
    }else if($nilai <= 59 && $nilai >= 40){
        echo "Nilai - C";
    }else if($nilai <= 39 && $nilai >= 0 ){
        echo "Nilai - D";
    }else {
        echo "Nilai tidak terdeteksi";
    }
?>