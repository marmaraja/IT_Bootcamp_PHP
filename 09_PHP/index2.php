<?php
    /*Zadatak 3.*/
    $cena = 1400;
    $nov = 2000;
    $kusur = $nov - $cena;
    echo "<hr>";
    echo "Kusur je: " . $kusur;
    echo "<hr>";

    /* Zadatak 4. */
    $eur = 100;
    $kursEur = 117.5;
    $din = $eur * $kursEur;
    echo "<hr>";
    echo "Vrednost nakon konverzije je: " . $din . " dinara";
    echo "<hr>";

    /* Zadatak 5. */
    $din = 10000;
    $eur = $din / $kursEur;
    echo "<hr>";
    echo "Vrednost u eurima je: " . $eur . " eura";
    echo "<hr>";

    /* Zadatak 6. */
    $eur = 100;
    $kursEurDin = 117.5;
    $kursDolDin = 106.7;
    //$din = $eur * $kursEurDin; // broj dinara koji imamo nakon konverz eur->din
    //$dol = $din / $kursDolDin; // broj dinara nakon din->dol
    $dol = $eur * $kursEurDin / $kursDolDin;
    echo "<hr>";
    echo "Vrednost nakon konverzije je: " . $dol. " dolara";
    echo "<hr>";

    /* Zadatak 10. */
    // 100 : $cenaBezPop = (100 - $popust) : $cena
    // $cenaBezPop = 100 * $cena / (100 - $popust)
    $cena = 70;
    $popust = 20;
    $cenaBezPop = $cena * 100 / (100 - $popust);
    echo "<hr>";
    echo "Cena pre popusta je: " . $cenaBezPop;
    echo "<hr>";

    // II nacin:
    $udeo = (100 - $popust) / 100;
    $cenaBezPop = $cena / $udeo;
    echo "<hr>";
    echo "Cena pre popusta je: " . $cenaBezPop;
    echo "<hr>";

    /* Zadatak 11.*/
    // Boc: 3 -> 1 dan,  0 tabl neiskor.
    // Boc: 4 -> 1 dan,  1 tabl neiskor.
    // Boc: 5 -> 1 dan,  2 tabl neiskor.
    // Boc: 6 -> 2 dan,  0 tabl neiskor.
    // Boc: 7 -> 2 dan,  1 tabl neiskor.
    // Boc: 8 -> 2 dan,  2 tabl neiskor.

    $brT = 56;
    $brDana = floor ($brT / 3);
    $ost = $brT % 3;
    echo "<hr>";
    echo "Broj dana je: " . $brDana;
    echo "<br>";
    echo "Ostatak je: " . $ost;
    echo "<hr>";
?>