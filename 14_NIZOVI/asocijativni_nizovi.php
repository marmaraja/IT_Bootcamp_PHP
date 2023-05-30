<?php

    /*$godine = array(
        "Pera" => 28,
        "Lazar" => 26,
        "Violeta" => 35,
        "Marko" => 35
    );

    echo $godine["Pera"];
    echo "<hr>";
    */

    $godine = array();
    $godine["Pera"] = 28;
    $godine["Lazar"] = 26;
    $godine["Violeta"] = 35;
    $godine["Marko"] = 35;


    $godine["x"] = 48;
    echo $godine["Pera"];
    echo "<hr>";
    
    var_dump($godine);

    echo "<hr>";

    foreach ($godine as $i => $g)
    {
        echo "<p>Osoba $i ima $g godina</p>";
    }

    foreach ($godine as $g)
    {
        echo "<p>Osoba ima $g godina</p>";
    }


    echo "<hr>";

    // Foreach petlja moze da se koristi i za indeksne nizove

    $brojevi = array(5, -6, 3.3, 17.8, 0);
    $brojevi[2] = 4;
    foreach ($brojevi as $broj)
    {
        echo "$broj &nbsp ";
    }

    echo "<hr>";

    foreach ($brojevi as $indeks => $broj){
        echo "<p>Element sa indeksom $indeks ima vrednost $broj.</p>";
    }

    echo "<hr>";


    // Zadatak 1:
    $automobili = array (
        "Audi A3" => 2004,
        "Opel Corsa" => 1998,
        "Opel Astra" => 2016,
        "Peugeot 208" => 2004,
        "Ford Focus" => 2015
    );

    // Ispisati sve automobile, kao i njihova godišta
    foreach($automobili as $marka => $godiste)
    {
        echo "<p>Automobili $marka proizveden $godiste. godine</p>";
    }

    echo "<br>";

    // Ispisati automobile koji su stariji od 10 godina
    $trenutnaGodina = date("Y");
    foreach($automobili as $marka => $godiste)
    {
        if($trenutnaGodina - $godiste > 10)
        {
            echo "<p>Automobil $marka je stariji od 10 godina.</p>";
        }
    }
    echo "<br>";
    // Ispisati automobile čija Marka sarži string “Opel”, a proizvedena su posle 2000. godine
    foreach($automobili as $marka => $godiste)
    {
        if(strpos($marka, "Opel") !== false && $godiste >= 2000)
        {
            echo "<p>Automobil $marka je proizveden posle 2000.</p>";
        }
    }

    echo "<hr>";

    // Zadatak 2: Dat je niz elemenata u obliku ImeOsobe/Visina

    $osobe = array (
        "Andrija" => 208,
        "Olga" => 159,
        "Pera" => 186,
        "Mika" => 172,
        "Vasa" => 186,
        "Iskra" => 164,
        "Violeta" => 144,
        "Vasilije" => 208,
    );

    foreach($osobe as $ime => $visina)
    {
        echo "<p>Visina osobe $ime je $visina cm</p>";
    }
    echo "<br>";
    // Ispisati sve natprosečno visoke osobe
    $pom = 0;
    $br = 0;
    foreach($osobe as $visina)
    {
        $pom += $visina;
        $br++;
    }

    $prosek = $pom / $br;

    //echo "<p>$prosek</p>";
    foreach($osobe as $ime => $visina)
    {
        if ($visina > $prosek) {
            echo "<p>Osobe $ime je nadprosecno visoka, sa visinom od $visina cm</p>";
        }
    }
    echo "<br>";

    // Ispisati sve osobe koje imaju maksimalnu visinu
    $max = 0;
    foreach($osobe as $visina){
        if($visina > $max) {
            $max = $visina;
        }
    }

    //echo "$max";
    foreach($osobe as $ime => $visina){
        if($visina == $max) {
            echo "<p>Osoba $ime ima maksimalnu visinu ($visina cm)</p>";
        }
    }
    echo "<br>";

    //Ispisati sve osobe sa visinom ispod proseka, a čije ime počinje na slovo 'V'
    foreach($osobe as $ime => $visina){
        if($visina < $prosek && substr($ime, 0, 1) == 'V') {
            echo "<p>Osoba $ime ima visinu ispod proseka ($visina cm), i pocinje na slovo 'V'</p>";
        }
    }
    echo "<hr>";


    /*
    $dete1 = array (
        "ime" => "Pera",
        "prezime" => "Peric",
        "ime" => "Pera",
    )
    */



?>