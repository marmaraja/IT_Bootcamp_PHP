<?php
    //7 zadatak: Odrediti broj elemenata celobrojnog niza koji su veći od srednje vrednosti.

    $brojevi = [1, 2, 15];

    /*// Netacan pristup!!!
    $zbir = 0;
    $broj = 0;
    for($i = 0; $i < count($brojevi); $i++)
    {
        $zbir += $brojevi[$i];
        $arsr = $zbir / count($brojevi);
        if ($brojevi[$i] > $arsr)
        {
            $broj++;
        }
    }

echo "<p>Broj brojeva veci od sr vr niza je: $broj</p>";*/



$zbir = 0;
$broj = 0;
for($i = 0; $i < count($brojevi); $i++)
{
    $zbir += $brojevi[$i];
}
    $arsr = $zbir / count($brojevi);
    for($i = 0; $i < count($brojevi); $i++){
        if ($brojevi[$i] > $arsr)
        {
            $broj++;
        }
    }
    echo "<p>Broj brojeva veci od sr vr niza je: $broj</p>";

    echo "<hr>";

    // Zadatak 8: Izračunati zbir pozitivnih elemenata celobrojnog niza.

    $brojevi = [1, 2, 15, -15, 56, -22];
 
    $zbir = 0;
    for($i=0; $i<count($brojevi); $i++) {
        if($brojevi[$i] > 0)
        {
            $zbir += $brojevi[$i];
        }
    }
    echo "<p>Zbir pozitivnih el niza je: $zbir</p>";

    echo "<hr>";


    // Zadatak 9: Odrediti broj parnih elemenata u celobrojnom nizu.

    $brojevi = [1, 2, 15, 25, 56, 22];
    $brEl = 0;
    for($i=0; $i<count($brojevi); $i++) {
        if($brojevi[$i] % 2 == 0) {
            $brEl++;
        }
    }

    echo "<p>Broj parnih el niza je: $brEl</p>";

    echo "<hr>";

    // Zadatak 10: Izračunati sumu elemenata u nizu sa parnim indeksom.

    $brojevi = [1, 2, 15, 25, 56, 22];
    $suma = 0;
    for($i=0; $i<count($brojevi); $i++) {
        if ($i%2 == 0){
            $suma += $brojevi[$i];
        }
    }

    echo "<p>Suma elemenata na parnim indeksima niza je: $suma</p>";

    echo "<hr>";

    // Bonus zadatak: Izracunati sr vr parnih el niza

    $brojevi = [1, 5, 14, 5];

    $zbir = 0;
    $broj = 0;
    for($i = 0; $i < count($brojevi); $i++)
    {
        if ($brojevi[$i] % 2 == 0) {
            $zbir += $brojevi[$i];
            $broj++;
        }
    }
    if ($broj != 0) {
        $srvr = $zbir / $broj;     
    }
    else {
        $srvr = 0;
    }

    echo "<p>Srednja vrednost parnih el niza je: $srvr</p>";

    echo "<hr>";



    // Zadatak 11: Promeniti znak svakom elementu celobrojnog niza.

    $brojevi = [1, -9, 0, 15];
    
    var_dump($brojevi);
    for($i = 0; $i < count($brojevi); $i++) {
        $brojevi[$i] *= -1; // menjanje znaka // -$brojevi[$i]
    }

    var_dump($brojevi);
    echo "<hr>";

    // Zadatak 12: Promeniti znak svakom neparnom elementu celobrojnog niza sa parnim indeksom.

    $brojevi = [1, -9, 0, 15, 3, 31, 6, 16,19];
    
    for($i = 0; $i < count($brojevi); $i++) {
        if (($i%2 == 0) && ($brojevi[$i] %2 == 1)){
            $brojevi[$i] *= -1; 
        }
    }

    var_dump($brojevi);
    echo "<hr>";


    // Zadatak 13: Odrediti broj parnih elemenata sa neparnim indeksom.

    $brojevi = [1, 8, 0, 0, 3, 31, 6, 16, 19];
    $brE = 0;
    for($i = 0; $i < count($brojevi); $i++) {
        if (($i%2 == 1) && ($brojevi[$i] %2 == 0)){
            $brE++;
        }
    }
    echo "<p>Broj parnih el niza sa neparnim indeksom je: $brE</p>";

    echo "<hr>";

    // Zadatak 14: Ispisati dužinu svakog elementa u nizu stringova

    $imena = ["Stefan", "Aleksandar", "Adam", "Marija", "Dunja", "Milijana"];
    for ($i = 0; $i < count($imena); $i++) 
    {
        $ime = $imena[$i];
        $duzina = strlen($ime); //$duzina = mb_strlen($ime, "UTF-8"); - za cirilicu i   nasu latinicu
        echo "<p>Duzina stringa $ime je $duzina</p>";
    }

    echo "<hr>";

    // Zadatak 15: Odrediti element u nizu stringova sa najvećom dužinom

    $stringMaxDuzine = $imena[0];
    $maxDuzina = strlen($imena[0]);

    for($i = 1; $i < count($imena); $i++)
    {
        if(strlen($imena[$i]) > $maxDuzina)
        {
            $maxDuzina = strlen($imena[$i]);
            $stringMaxDuzine = $imena[$i];
        }
    }

    echo "<p>Element niza sa maksimalnom duzinom je: $stringMaxDuzine</p>";

    echo "<hr>";
    
    
    // Zadatak 17: Odrediti broj elemenata u nizu stringova koji sadrže slovo 'a'

    // Kako da odredimo da li se u nekom stringu nalazi neki podstring?
    // Koristimo funkciju strpos($str1, $str2)
    //Rezultat poziva funkcije:
    // 1) Ako se $str2 nalazi unutar $str1, vraca se INDEKS prvog pojavljivanja
    // CEO BROJ (0, 1, 2, 3, ...)
    // 2) Ako se $str2 ne nalazi unutar $str1, vraca se FALSE
    // LOGICKA VREDNOST 
    /*
    if(strpos("Sredaaa", "a") != false)
    {
        echo "<p>String 'a' se nalazi u stringu 'Sredaaa'</p>";
    }
    else
    {
        echo "<p>String 'a' se ne nalazi u stringu 'Sredaaa'</p>";
    }

    */
    $imena = ["Uros", "Djordje", "Stefan", "Beti", "Andreja", "Maja"];
    $brojSadrziA = 0;
    for ($i = 0; $i < count($imena); $i++)
    {
        if(strpos($imena[$i], "a") !== false)
        {
            $brojSadrziA++;
        }
    }

    echo "<p>Broj stringova koji sadrza slovo 'a' je $brojSadrziA</p>";
    echo "<hr>";

    // Zadatak 18: Odrediti broj elemenata u nizu stringova koji počinju na slovo 'a' ili 'A'

    $imena = ["Uros", "Djordje", "Stefan", "Beti", "Andreja", "Maja"];
    $brojPocinjeA = 0;
    for ($i = 0; $i < count($imena); $i++)
    {
        //if(strpos($imena[$i], "a") === 0) || (strpos($imena[$i], "A") === 0)
        //if(($imena[$i][0] == "a") || ($imena[$i][0] =="A"))
        if(strtolower($imena[$i][0]) == 'a')
        {
            $brojPocinjeA++;
        }
    }

    echo "<p>Broj stringova koji sadrza slovo 'a' je $brojPocinjeA</p>";
    echo "<hr>";
?>