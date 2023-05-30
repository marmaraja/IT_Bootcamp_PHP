<?php

    // Bez nizova
    $car1 = "BMW";
    $car2 = "Volvo";
    $car3 = "Toyota";

    // Sa nizovima
    $cars = array("BMW", "Volvo", "Toyota"); //$cars = ["BMW", "Volvo", "Toyota"];
    // Elementi ovog niza su "BMW", "Volvo", "Toyota"
    // Indeksi elemenata ovog niza su: 0, 1, 2
    // Broj elemenata = 3

    var_dump($cars); //Najdetaljnije ispisuje podatke
    echo "<hr>";

    var_dump($car1);
    echo "<hr>";
    

    echo "$car1"; // Najmanje detaljno ispisuje podatke
    echo "<hr>";
    
    print_r($cars);
    echo "<hr>";
    
    //Pristupanje elementima:
    $prviElement = $cars[0];
    $drugiElement = $cars[1];
    $treciElement = $cars[2];

    echo "$prviElement, $drugiElement, $treciElement";
    echo "<hr>";
    echo "Prvi element u nizu je $cars[0]";
    echo "<hr>";
    //echo "Prvi element u nizu je $cars[7]"; -> ne moze = Undefinied key array
    echo "<hr>";

    //Izmena elemenata se vrsi ukoliko pod tim indeksom vec postoji element
    $cars[1] = "Peugeot";
    print_r($cars);
    echo "<hr>";

    //Dodavanje elemenata se vrsi ukoliko pod tim indeksom ne postoji element
    $cars[30] = "Audi";
    print_r($cars);
    echo "<hr>";

    //////////////////////

    $polaznici = array(); //polaznici = [];
    $polaznici[] = "Aleksandar"; // -> dodaje na kraj niza
    $polaznici[] = "Uros";
    $polaznici[] = "Milijana";
    $polaznici[] = "Andreja";
    $polaznici[] = "Nikola";

    print_r($polaznici);
    echo "<hr>";

    var_dump($polaznici);
    echo "<hr>";

    $duzina = count($polaznici); //prebrojava koliko ima polaznika u nizu
    echo "U nizu ima $duzina polaznika.";
    echo "<hr>";

    for($i=0; $i<4; $i++) {
        echo "$polaznici[$i], ";
    }
    echo "<hr>";

    for($i=0; $i<$duzina; $i++) {
        echo "$polaznici[$i], ";
    }
    echo "<hr>";
    


    // Zadatak 2:
    //Zbir el celobrojnog niza

    $brojevi = [5, 14, -4, 0, 11, -7, 9];
    $suma = 0;
    for($i = 0; $i < count($brojevi); $i++) {
        echo "$brojevi[$i], "; // Zadatak 1
        $suma += $brojevi[$i];
    }
    echo "<br>";
    echo "Suma elemenata niza iznad je: $suma";
    echo "<br>";

    // Ugradjena funkcija 
    $zbir = array_sum($brojevi);
    echo "Zbir elemenata niza je: $zbir.";
    echo "<hr>";

    // Zadatak 3:

    $brojevi = [5, 14, -4, 0, 11, -7, 9];
    $brEl = count($brojevi);
    $arSr = $zbir / $brEl; // $arSr = array_sum($brojevi) / count($brojevi);
    echo "Aritmeticka vrednost elemenata niza je: $arSr";
    echo "<hr>";

    // Dopuna - I nacin
    if($brEl == 0) {
        echo "<p>Prazan niz - aritmeticka sredina je 0</p>";
    }
    else {
        $arSr = $zbir / $brEl;
        echo "<p>Aritmeticka sredina je $arSr</p>";
    }
  

    // Dopuna - II nacin
    
    // Dopuna - III nacin

    // Dopuna - IV nacin

    // Dopuna - V nacin

    // Zadatak 4:
    // Odrediti maksimalnu vrednost u celobrojnom nizu
    // Koji je najveci broj u celobrojnom nizu
    echo "<hr>";

    $brojevi = [5, 14, -4, 0, 11, -7, 9];
    $max = $brojevi[0];
    for($i=0; $i<count($brojevi); $i++) {
        if($brojevi[$i]>$max) {
            $max = $brojevi[$i];
        }
    }
    echo "Maksimalna vrednost niza je: $max.";
    echo "<hr>";


    // Zadatak 5:
    $brojevi = [5, 14, -4, 0, 11, -7, 9];
    $min = $brojevi[0];
    for($i=0; $i<count($brojevi); $i++) {
        if($brojevi[$i]<$min) {
            $min = $brojevi[$i];
        }
    }
    echo "Minimalna vrednost niza je: $min.";
    echo "<hr>";

    // Zadatak 6:
    $brojevi = [5, 14, -4, 11, 11, -7, 4]; //indexi: 1, 3, 6
    $maks = $brojevi;
    $trenutniEl = 0;
    // 6.1. index prvog pojavljivanja max el
    $indexMax = 0;
    for($i=0; $i<count($brojevi); $i++) {
        $trenutniEl = $brojevi[$i];
        if($trenutniEl >= $max) {
          $max = $trenutniEl;
          $indexMax = $i;
        }
    }
    echo "Najveci element ima vrednost $max, a indeks njegovog prvog pojavljivanja je $indexMax.";
    echo "<hr>";

    // Svi indexi
    $brojevi = [5, 14, -4, 14, 11, -7, 14]; 
    $maks = $brojevi[0];
    $indexMax = 0;
    $sviIndexMax = [];
    for($i=0; $i<count($brojevi); $i++) {
        $trenutniEl = $brojevi[$i];
        if($trenutniEl >= $max) {
          $maks = $trenutniEl;
          $indexMax = $i;
          echo "$i, ";
        }
    }
    echo "<br>";
    // 2 nacin
    $brojevi = [5, 14, -4, 14, 11, -7, 14]; 
    $maks = $brojevi[0];
    $sviIndexMax = [];
//prvi prolaz odredjuje max
    for($i=0; $i<count($brojevi); $i++) {
        $trenutniEl = $brojevi[$i];
        if($trenutniEl > $maks) {
          $maks = $trenutniEl;
        }
    }
    
    for($i=0; $i<count($brojevi); $i++) {
        $trenutniEl = $brojevi[$i];
        if($trenutniEl == $maks) {
          $sviIndexMax = [$i];

        }
        elseif($trenutniEl == $maks) {
            $sviIndexMax[] = $i;
        }
    }
    echo "Najveci el je $maks, a njegovi indexi su ";
    // $sviIndexiMax = [1, 3, 6];
    for($i=0; $i<count($sviIndexMax); $i++) {
        echo "$sviIndexMax[$i], "; //ispis moze i sa implode
    }



?>