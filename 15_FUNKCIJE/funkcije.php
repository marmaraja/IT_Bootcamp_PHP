<?php

function mojaFunkcija()
{
    echo "<p>Moja prva funkcija</p>";
}

mojaFunkcija();
mojaFunkcija();
mojaFunkcija();
mojaFunkcija();

echo "<hr>";

function mojaFunkcija2($tekst){
    $b = 'Nova promenljiva';
    global $c;
    echo "<p>F-ja sa parametrom: $tekst i $b i $c</p>";
}

mojaFunkcija2("1.nacin");
$a="2. nacin";
$c = 'globalni';
mojaFunkcija2($a);
// echo $b; - ovo ne moze
$b = "van f-je";
mojaFunkcija2($a);
echo $b;

echo "<hr>";

function ispisImena($ime, $prezime){
    echo "<p>Ime i prezime je: $ime $prezime </p>";
}

ispisImena("Petar", "Petrovic");
$i = "Lazar";
$p = "Lazic";
ispisImena($p, $i); // paziti da se ne permutuje - nije dobro

function ispisImena2($ime, $prezime = null) {
    echo "<p>Ime je: $ime";
    if($prezime){
        echo " a prezime je: $prezime";
    }
    echo " ima godina";
    echo "</p>";
}
ispisImena2("Mika");
ispisImena2("Mika", "Mikic");

















?>