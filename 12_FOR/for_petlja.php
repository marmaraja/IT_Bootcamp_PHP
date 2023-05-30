<?php

    //Zadatak 1:

    for($i = 1; $i < 21; $i++) {
        echo "$i ";
    }
    echo "<hr>";
    //Zadatak 2:

    for($i = 20; $i > 0; $i--) {
        echo "$i ";
    }
    echo "<hr>";

    //Zadatak 3:
    for($i = 2; $i < 20 ; $i+=2) {
        echo "$i ";
    }
    echo "<hr>";

    //Zadatak 4:
    for($i = 5; $i < 16 ; $i++) {
        echo  ($i*2) ;
        echo " ";
    }
    echo "<hr>";

    //Zadatak 5:

    $suma = 0;
    for($i = 1; $i <= 100 ; $i++) {
        $suma += $i;
    }
    echo "Suma brojeva od 1 do 100 je: $suma";
    echo "<hr>";

    //Zadatak 6:

    $suma = 0;
    $n = 56;
    for($i = 1; $i <= $n ; $i++) {
        $suma += $i;
    }
    echo "Suma brojeva od 1 do $n je: $suma";
    echo "<hr>";

    //Zadatak 7:

    $suma = 0;
    $n = 56;
    $m = 60;
    for($i = $n; $i <= $m ; $i++) {
        $suma += $i;
    }
    echo "Suma brojeva od $n do $m je: $suma";
    echo "<hr>";

    //Zadatak 8:

    $proiz = 1;
    $n = 6;
    $m = 13;
    for($i = $n; $i <= $m ; $i++) {
        $proiz *= $i;
    }
    echo "Proizvod brojeva od n do m je: $proiz";
    echo "<hr>";

    //Zadatak 9:

    $sumKv = 0;
    $n = 6;
    $m = 13;
    for($i = $n; $i <= $m ; $i++) {
        $sumKv += $i * $i;
    }
    echo "Suma kvadrata od n do m je: $sumKv";
    echo "<hr>";

    //Zadatak 10:

    /*
    1 % 3 = 1 -> 1.jpg
    2 % 3 = 2 -> 2.jpg
    3 % 3 = 0 -> 3.jpg
    4 % 3 = 1 -> 1.jpg
    5 % 3 = 2 -> 2.jpg
    6 % 3 = 0 -> 3.jpg
    7 % 3 = 1 -> 1.jpg
    
    */
    $n = 7;
    for($i=1; $i<=$n; $i++) {
        if($i%3 == 1) {
            echo "<img src='1.jpg' style='height: 150px;'>";
        }
        elseif($i%3 == 2) {
            echo "<img src='2.jpg' style='height: 150px;'>";

        }
        else {
            echo "<img src='3.jpg' style='height: 150px;'>";
        }
    }
    echo "<hr>";

    // II nacin:
    $n = 7;
   for($i=0; $i<$n; $i++) {
        $ost = $i%3;
        if($ost == 0) {
            $ost = 3;
        }
        echo "<img src='$ost.jpg' style='height: 150px;'>";
    } 
    echo "<hr>";

    // III nacin:
    // probati koriscenjem switch


    // Da je zadatak bio n puta ispisati 3 slike:

    $n = 4;
    $j=0;
    for($i=1; $i<=$n; $i++) {
        for($j=1; $j<=3; $j++) {
            echo "<img src='$j.jpg' style='height: 150px;'>";
        }
        echo "<br>";
    }
    echo "<hr>";

    // Zadatak 11:

    $sum = 0;
    for($i = 1; $i <= 30 ; $i++) {
        if ($i % 9 == 0) {
            $sum += $i;
        }
    }
    echo "Zbir brojeva deljivih sa 9, od 1 do 30 je: $sum";
    echo "<hr>";

    // Zadatak 12:

    $pro = 1;
    for($i = 20; $i < 100 ; $i++) {
        if ($i % 11 == 0) {
            $pro *= $i;
        }
    }
    echo "Proizvod brojeva deljivih sa 11 od 20 do 100 je: $pro";
    echo "<hr>";
    
    // Zadatak 13:

    $n = 0;
    for($i=5; $i<=150; $i++) {
        if ($i % 13 == 0)
        {
            $n++;
        }
    }
    echo "Brojeva deljivih sa 13 od 5 do 150 ima: $n";
    echo "<hr>";

    // Zadatak 14:

    $n = 5;
    $m = 17;
    $pom = 0;
    $arSr = 0;

    for($i=$n; $i<=$m; $i++) {
        $pom+=$i;
    }
    $arSr = $pom / ($m-$n+1);

    echo "Aritmeticka sredina brojeva od $n do $m je: $arSr";
    echo "<hr>";

    // Zadatak 15:

    $n = -225;
    $m = 177;
    $poz = 0;
    $neg = 0;

    for($i = $n; $i<=$m; $i++){
        if($i<0){
            $neg++;
        }
        else{
            $poz++;
        }

    }
    $poz-=1;


    echo "Negativnih brojeva od $n do $m ima: $neg";
    echo "<br>";
    echo "Pozitivnih brojeva od $n do $m ima: $poz";
    echo "<hr>";


    //Zadatak 16:

    $brojac=1;
    for($i=5; $i<=50; $i++){
        if(($i%3==0) || ($i%5==0)){
            $brojac++;
        }
    }
    echo "Brojeva od 5 do 50 deljivih sa 3 ili 5 ima: $brojac";
    echo "<hr>";

    // Zadatak 17:
    $n = 2;
    $m = 25;
    $prebr= 0;
    $suma=0;

    for($i=$n; $i<=$m; $i++) {
        if($i%10==4){
            $prebr++;
            $suma+=$i;
        }
    }
    echo "Brojeva od $n do $m deljivih sa 4 i parni su ima: $prebr, ";
    echo "njihova suma je: $suma";
    echo "<hr>";

    //Zadatak 18:

    $n = 8;
    $m = 31;
    $a = 3;

    for($i=$n; $i<=$m; $i++){
        if($i%$a == 0){
            echo "$i, ";
        }
    }
    echo "<hr>";
    //II nacin:
    $start = ceil($n/$a) * $a; // ceil(8/5)*5
    $end = floor($m/$a) * $a; //floor(31/5)*5
    for($i=$start; $i<=$end; $i+=$a) {
        echo "$i * ";
    }
    echo "<hr>";
    
    //Zadatak 19:

    $n = 8;
    $m = 31;
    $a = 3;
    for($i=$n; $i<=$m; $i++){
        if($i%$a != 0){
            echo "$i, ";
        }
    }
    echo "<hr>";

    //Zadatak 20:

    $n = 8;
    $m = 31;
    $a = 3;
    $sum = 0;
    for($i=$n; $i<=$m; $i++){
        if($i%$a != 0){
            $sum+=$i;
        }
    }
    echo "Suma brojeva od $n do $m koji nisu deljivi sa $a je: $sum";
    echo "<hr>";

    //Zadatak 21:

    $n = 8;
    $m = 31;
    $a = 3;
    $b = 2;
    $proi = 1;
    for($i=$n; $i<=$m; $i++){
        if(($i%$a == 0) && ($i%$b != 0)){
            $proi*=$i;
        }
    }
    echo "Proizvod brojeva od $n do $m koji su deljivi sa $a, a nisu sa $b je: $proi";
    echo "<hr>";

    //II nacin:
    $proii = 1;
    if($a%$b == 0) {
        echo "<p>1</p>";
    }
    else {
        $start = ceil($n/$a) * $a; 
        $end = floor($m/$a) * $a;
        for($i=$start; $i<=$end; $i+=$a) {
            if($i%$b == 0){
                continue; //kada dodje ovde , ne izvrsava ono sto je unutar petlje, 
                        //nego ga preskace, tj nastavlja dalje
            }
            $proii *=$i;
        }
        echo "<p>$proii</p>";
    }
    echo "<hr>";
?>