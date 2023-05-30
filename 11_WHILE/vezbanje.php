<?php
    // Zadatak 13:

    $proizvod = 1;
    $i = 20;


    while($i >= 1) {
        $proizvod = $proizvod * $i;
        if($proizvod > 10000){
            break;
        }
        $i--;
    }

    echo "<p style='color:red;'> Proizvod brojeva od 20 ka $i je $proizvod";
    echo "<p style='color:green;'> Poslednji pomnozeni broj je $i";

    // II nacin
    $proizvod = 1;
    $i = 21;
    while($proizvod < 10000 && $i >= 1){
        $i--;
        $proizvod = $proizvod * $i;

    }
    echo "<p style='color:red;'> Proizvod brojeva od 20 ka $i je $proizvod";
    echo "<p style='color:green;'> Poslednji pomnozeni broj je $i";

    //

    // Zadatak 14:

    $m = 119;
    $n = 1735;
    $pro = 1;


    if($m < $n) {
        while($pro <= $n) {
            $pro *= $m;
        }
        echo "<p>Proizvod je $pro</p>";
    }

    else {
        echo "<p>GRESKA</p>";
    }
?>