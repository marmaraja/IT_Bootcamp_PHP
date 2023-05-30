<?php
    $n = 11;
    
    if ($n <= 10)
    {
        echo "<p>Prva desetica</p>";
    }
    elseif ($n < 20)
    {
        echo "<p>Druga desetica</p>";
    }
    else 
    {
        echo "<p>Broj je veci od 20</p>";
    } 
    
    //Alternativno:
    if ($n > 20)
    {
        echo "<p>Broj je veci od 20</p>";
    }
    elseif ($n > 10)
    {
        echo "<p>Druga desetica</p>";
    }
    else
    {
        echo "<p>Prva desetica</p>";
    }

    // Zadatak 7.

    $brPoena = 100;

    if ($brPoena <= 50)
    {
        echo "<p>Pao ispit</p>";
    }
    elseif ($brPoena <= 60)
    {
        echo "<p>Ocena: 6</p>";
    }
    elseif ($brPoena <= 70)
    {
        echo "<p>Ocena: 7</p>";
    }
    elseif ($brPoena <= 80)
    {
        echo "<p>Ocena: 8</p>";
    }
    elseif ($brPoena <= 90)
    {
        echo "<p>Ocena: 9</p>";
    }
    elseif ($brPoena <= 100)
    {
        echo "<p>Ocena: 10</p>";
    }
    else
    {
        echo "<p>Neispravan unos</p>";
    }

    // Zadatak 8.
    
    $day = date("l");

    if ($day == "Saturday")
    {
        echo "<p>Vikend</p>";
    }
    else if ($day == "Sunday")
    {
        echo "<p>Vikend</p>";
    }
    else 
    {
        echo "<p>Radni dan</p>";
    }

    // Zadatak 9.
    date_default_timezone_set('europe/Belgrade');
    $sati = date('G');

    if ($sati < 12)
    {
        echo "<p>Dobro jutro</p>";
    }
    else if ($sati < 18)
    {
        echo "<p>Dobar dan</p>";
    }
    else
    {
        echo "<p>Dobro vece</p>";
    }

    // Zadatak 10.
    $dan1 = 12;
    $dan2 = 5;
    $mesec1 = 2;
    $mesec2 = 7;
    $godina1 = 1986;
    $godina2 = 2003;

    if ($godina1 < $godina2)
    {
        echo "<p>Raniji je prvi datum $dan1 - $mesec1 - $godina1</p>";
    }
    elseif (($godina1 == $godina2) && ($mesec1 < $mesec2))
    {
        echo "<p>Raniji je prvi datum $dan1 - $mesec1 - $godina1</p>";
    }
    elseif (($godina1 == $godina2) && ($mesec1 == $mesec2) && ($dan1 < $dan2))
    {
        echo "<p>Raniji je prvi datum $dan1 - $mesec1 - $godina1</p>";
    }
    else
    {
        echo "<p>Raniji je drugi datum $dan2 - $mesec2 - $godina2</p>";
    }

  
    // Zadatak 11.
    date_default_timezone_set('europe/Belgrade');
    $sati = date('G');
    $minuti = date('I');


    if ((($sati >= 9) && ($sati < 17)) || (($sati == 16 ) && ($minuti <= 59)))
    {
        echo "<p>Firma radi</p>";
    }
    else
    {
        echo "<p>Firma ne radi</p>";
    }

    // Zadatak 12.

    // Prvi lekar:
    $p1 = 9;
    $k1 = 17;

    // Drugi lekar
    $p2 = 11;
    $k2 = 18;

    if ($k1 < $p2)
    {
        echo "<p>Ne preklapaju se</p>";
    }
    elseif ($k2 < $p1)
    {
        echo "<p>Ne preklapaju se</p>";
    }
    else
    {
        echo "<p>Preklapaju se</p>";
    }

    // Zadatak 13
    $n = 103;
    if ($n % 2 == 0)
    {
        echo "<p>$n je paran</p>";
    }
    else
    {
        echo "<p>$n je neparan</p>";
    }

    // Zadatak 15

    $a = 151;
    $b = 89;

    if ($a > $b)
    {
        echo "<p>Rezultat je: " . ($a - $b) . "</p>";
    }
    else 
    {
        echo "<p>Rezultat je: " . ($b - $a) . "</p>";
    }

    // Zadatak 16

    $n = -65;

    if ($n <= 0)
    {
        echo "<p>Prethodnik je: " . ($n - 1) . "</p>";
    }
    else 
    {
        echo "<p>Sledbenik je: " . ($n + 1) . "</p>";
    }

    // Zadatak 17

    
?>