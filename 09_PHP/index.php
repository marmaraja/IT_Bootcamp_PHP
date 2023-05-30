<?php
    $a =  "Zdravo svete"; //promenljiva $a dobija vrednost "Zdravo svete"
    echo $a; //ovo prikazuje string"Zdravo svete"
    echo "<br>";
    $a = 28;
    echo $a;
    echo "<br>";
    $a = 28 + 2;
    echo $a;
    echo "<br>";
    $a = 2.5 + 8.2;
    echo $a;
    echo "<br>";
    $a = 100;
    echo $a;
    echo "<br>";
    $b = $a - 20;
    echo "vrednost promenljive b je " . " osamdeset- " . $b;
    echo "<br>";
    echo "vrednost promenljive b je  $b";
    echo "<br>";
    echo 'vrednost promenljive b je  $b';
    echo "<br>";
    $c = "3";
    $d = $c + 2;
    echo $d;
    echo "<br>";

    $c = "1";
    $d = $c + 2;
    echo $d;
    echo "<br>";

    $d = $d + 2;
    echo $d;
    echo "<br>";
    $d += 2;
    echo $d;
    echo "<br>";
    echo "<hr>";


    /* 1. zadatak */
    $h = 20;
    $m = 35;

    $rez = $h * 60 + 35;
    echo "Rezultat zadatka je ". $rez . " minuta";
    echo "<br>";
    echo "<hr>";

    /* 2. zadatak */

    date_default_timezone_set('europe/Belgrade');
    $sati = date('G');
    $minuti = date('i');

    echo "Trenutno vreme je ". $sati . " i " . $minuti . " minuta";
 
    $rez = $sati * 60 + $minuti;
    echo "Rezultat zadatka 2. je ". number_format($rez, 0, ",", ".") . " minuta";
    echo "<br>";
    echo "<hr>";

    /* 3. zadatak */


?>