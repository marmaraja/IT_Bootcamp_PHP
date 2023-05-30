<?php

    // Zadatak 1.
    $a = 19.35;
    $b = -3.14;

    if ($a > $b)
    {
        echo "<p>Veci je broj $a</p>";
    }
    else
    {
        echo "<p>Veci je broj $b</p>";
    }
    // Alternativno
    echo "<p>Veci je broj " . (($a > $b) ? $a : $b) . " </p>";

    // Zadatak 4.
    $dobaDana = date("a"); 
    if ($dobaDana == "am")
    {
        echo "<p>Pre podne</p>";
    }
    else
    {
        echo "<p>Posle podne</p>";
    }

    // Alternativno 
    if ($dobaDana == "pm")
    {
        echo "<p>Posle podne</p>";
    }
    else
    {
        echo "<p>Pre podne</p>";
    }

    // Zadatatk 3.

    $pol = "e";
    if ($pol == "M")
    {
        echo "<p> <img src='m.png' alt='muski pol'> </p>";
    }
    else {
        echo "<p> <img src='f.png' alt='zenski pol'> </p>";
    }
    

    //Zadatak 2.
    $temp = 7.3;

    if ( $temp >= 0)
    {
        echo "<p>Temperatura je veca od nule</p>";
    }
    else
    {
        echo "<p>Temperatura je manja od nule</p>";
    }

    //Zadatak 5.
    $godina = date('Y');
    $godRodenja = 1963;
    $brGodina = $godina - $godRodenja;

    if ($brGodina >= 18)
    {
        echo "<p>Osoba je punoletna</p>";
    }
    else
    {
        echo "<p>Osoba nije punoletna</p>";
    }



    //Zadatak 6.
    $a = 9;
    $b = -6;
    $c = 6;

    if ($a > $b)
    {
        $pom = $a;
        $a = $b;
        $b = $pom;
    }
    // Posle ovog if-a u $a je sigurno manja vrednost nego u $b

    if ($a > $c)
    {
        $pom = $a;
        $a = $c;
        $c = $pom;
    }
    //Posle ovog if-a u $a je sigurno najmanja vrednost od zadate tri

    if ($b > $c)
    {
        $pom = $b;
        $b = $c;
        $c = $pom;
    }
    // Posle ovog if-a vazi $a <= b <= $c

    echo "<p>Brojevi od najmanjeg do najveceg: $a, $b, $c</p>";

    // Zadatak 17, ponovo
    $a = 5;
    $b = 9;
    $c = -3;

    $max = $a;
    if ($b > $max)
    {
        $max = $b;
    }
    if ($c > $max)
    {
        $max = $c;
    }

    $min = $a;
    if ($b < $min)
    {
        $min = $b;
    }
    if ($c < $min)
    {
        $min = $c;
    }
    
?>