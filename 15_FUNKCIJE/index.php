<?php

    // Zadatak 1: Napisati funkciju neparan koja za uneti ceo broj n vraća tačno ukoliko je neparan ili netačno ukoliko nije neparan. Pozvati funkciju i testirati njen rad 
    function neparan($broj){
        //echo "<p>Pocetak f-je</p>";
        $rez = true;
        if($broj%2==0) {
            $rez = false;
        }
        else {
            return true;
        }
        //echo "<p>Kraj</p>";
        return $rez;
    }

    $a = 10;
    if (neparan($a)){
        echo "<p>Broj je neparan</p>";
    }
    else {
        echo "<p>Broj je paran</p>";
    }

    echo "<hr>"; 

    // Zadatak 2: Napisati funkciju maks2 koja vraća veći od dva prosleđena realna broja. Zatim napisati funkciju maks4 koja vraća najveći od četiri realna broja. Pozvati funkcije i testirati njihov rad

    function maks2($a, $b){
        if($a > $b) {
            return $a;
        }
        else {
            return $b;
        }
    }

    $broj1 = 15;
    $broj2 = 45;
    $veci = maks2($broj1, $broj2);
    echo "<p>Veci od brojeva $broj1 i $broj2 je $veci</p>";

    function maks4($a, $b, $c, $d){
       /* $maksAB = maks2($a, $b);
        $maksCD = maks2($c, $d);
        $maks = maks2($maksAB, $maksCD);
        return $maks; */

        return maks2(maks2($a, $b), maks2($c, $d));
    }

    $b1 = 10;
    $b2 = 25;
    $b3 = 0;
    $b4 = 10;
    $r = maks4($b1, $b2, $b3, $b4);

    echo "<p>Maksimalni od brojeva $b1, $b2, $b3, $b4 je $r</p>";

    echo "<hr>"; 


    function kub($a) {
        return $a * $a * $a;
    }

    $broj = 10;
    $rez = kub($broj);
    echo "<p>$rez</p>";

    echo "<hr>"; 
    // Zadatak 3: Napisati funkciju slika kojoj se prosleđuje url adresa slike, a funkcija prikazuje sliku za prosleđenu adresu slike. Pozvati funkciju i testirati je za različite url adrese

    function slika($url){
        echo "<img src='$url'>";

    }
    slika("https://static.nationalgeographic.rs/Pictures/950/1689/6985/jpeg/Vincent_van_Gogh___National_Gallery_of_Art_681308748");
    echo "<hr>"; 

    // Zadatak 4: Napraviti funkciju obojenaRec kojoj se prosleđuje boja na engleskom jeziku i prosleđuje se proizvoljna reč. Prosleđenu reč ispisati u paragarfu bojom koja je prosleđena. Pozvati funkciju i testirati je

    function obojenaRec($boja, $tekst) {
        echo "<p style='color: $boja'>$tekst</p>";
    }

    obojenaRec('red', "Ovo je tekst CRVENE boje");
    obojenaRec('blue', "Ovo je tekst PLAVE boje");
    echo "<hr>"; 

    // Zadatak 5: Napraviti funkciju recenica1 koja pet puta ispisuje istu rečenicu u paragrafu, a veličina fonta rečenice treba da bude jednaka vrednosti iteratora (sami odredite startnu vrednost iteratora i za koliki korak ćete iterator povećavati). Testirati funkciju

    function recenica1(){
        for($i=10; $i<=35; $i+=5){
            echo "<p style='font-size: ${i}px'>Recenica</p>";
        }
    }

    recenica1();

    echo "<hr>"; 

    // Zadatak 6: Napraviti funkciju recenica2 kojoj se prosleđuje veličina fonta a ona u paragrafu ispisuje proizvoljnu rečenicu. Pozvati funkciju pet puta za različite prosleđene vrednosti. Testirati funkciju

    function recenica2($font){
        echo "<p  style='font-size: ${font}px'>Proizvoljna recenica</p>";
    }
    
    $font = 15;
   
    for($i=0; $i<5; $i++){
        recenica2($font);
        $font+=2;
    }
    
    $a = 10;
    $b = 16;
    $c = 21;
    $d = 35;
    $e = 48;

    recenica2($a);
    recenica2($b);
    recenica2($c);
    recenica2($d);
    recenica2($e);

    echo "<hr>"; 

    // Zadatak 7: Napraviti funkciju aritmeticka koja vraća aritmetičku sredinu brojeva od n do m. Brojeve n i m proslediti kao parametre funkciji. Testirati funkciju

    function aritmeticka($n, $m){
        $zbir = 0;
        for($i=$n; $i<=$m; $i++){
            $zbir += $i; 
        }
        return $zbir / ($m - $n + 1);
    }

    echo aritmeticka(2, 12);

    echo "<hr>"; 

    // Zadatak 8: Napisati funkciju aritmetickaCifre koja vraća aritmetičku sredinu brojeva kojima je poslednja cifra 3 u intervalu od n do m. Brojeve n i m proslediti kao parametre funkciji. Testirati funkciju

    function aritmetickaCifra($n, $m){
        $zbir = 0;
        $nBroj = 0;
        for($i=$n; $i<= $m; $i++){
            if($i%10 == 3){
                $zbir+=$i;
                $nBroj++;
            }
        }
        if($nBroj){ //if($nBroj!=0) //if($nBroj>0)
            return $zbir/$nBroj;
        }
        else {
            return "<p>U opsegu nema brojeva koji zadovoljavaju uslov</p>";
        }
    }

    echo aritmetickaCifra(5, 35);

    $a = 45;
    $b = 150;

    echo aritmetickaCifra($a, $b);

    echo "<hr>"; 

    // Zadatak 9: Dobili ste plaćenu programersku praksu u trajanju od n meseci. Prvog meseca, plata će biti a dinara. Ako budete vredno radili, svakog narednog meseca ćete dobiti povišicu od d dinara. Brojeve n, a i d određujete sami.Napišite funkciju praksa kojoj se prosleđuju brojevi n i a. Funkcija treba da vrati vrednost koliko ćete ukupno navca zaraditi, ukoliko svakog meseca budete dobijali povišicu.Testirati zadatak (pozvati funkciju i ispisati vrednost koju ona vraća)

    function praksa($n, $a, $d){
        $ukupno = $a;
        for($i=2; $i<=$n; $i++){
            $ukupno+=$a + $d;
        }
        return $ukupno;
    }

    function praksa2($n, $a, $d){
        $ukupno = 0;
        for($i=1; $i<=$n; $i++){
            $ukupno += $a + $d;
        }
        return $ukupno - $d; 
    }

    $n = 10;
    $a = 1000;
    $d = 120;

    echo praksa($n, $a, $d);
    echo "<br>";
    echo praksa2($n, $a, $d);
    echo "<hr>"; 

    // Zadatak 10: Napraviti niz celih brojeva. Ispisati sve neparne brojeve ovog niza koristeći funkciju neparan iz 1. zadatka. Pozvati funkciju i testirati je

    //function neparan($broj)

    $niz = array(1, 5, 78, -89, 0, 12);
    for($i=0; $i < count($niz); $i++){
        if(neparan($niz[$i])){
            echo "<p>Broj $niz[$i] je neparan</p>";
        }
       // else {
        //    echo "<p>Broj $niz[$i] je paran</p>";
        //}
    }
    echo "<br>";
    //foreach($niz as $k => $v)
    foreach($niz as $v){
        if(neparan($v)){
            echo "<p>Broj $v je neparan</p>";
        }
    }

    // Zadatak 11: Napraviti funkciju brojNeparnih kojoj se kao parametar prosleđuje niz celih brojeva, a funkcija prebrojava i vraća koliko neparnih brojeva ima prosleđeni niz. Pozvati funkciju i testirati je

    function brojNeparnih($arr){
        $brojNeparnih = 0;
        for($i=0; $i < count($arr); $i++){
            if(neparan($arr[$i])){
                $brojNeparnih++;
            }
        }
        return $brojNeparnih;
    }

    echo "<p>Broj neparnih brojeva niza je: " .brojNeparnih($niz). "</p>";

    echo "<hr>"; 

    // Zadatak 12: U jednom gradu je od ponedeljka do petka, tačno u podne, merena temperatura vazduha. Izmerene temperature su zapisane u obliku asocijativnog niza datum/temperatura. Osmisliti funkciju (ili više njih) koja će na ekranu plavom bojom ispisati dan, datum i temperaturu kada je temperatura bila najniža, a crvenom bojom ispisati dan, datum i temperaturu kada je temperatura bila najviša. Testirati implementirani kod

    function najnizaTemp($arr){
        $minTemp = 100;
        $minDatum = "";
        $minDan = 0;
        $dan = 1;
        foreach($arr as $datum => $temp) {
            if($minTemp > $temp) {
                $minTemp = $temp;
                $minDatum = $datum;
                $minDan = $dan;
            }
            $dan++;
        }
        $dani = ['Ponedeljak', 'Utorak', 'Sreda', 'Cetvrtak', 'Petak'];
        echo "<p style='color: blue'>".$dani[$minDan-1]." ".$minDatum." sa temp ".$minTemp."</p>";
    }
    $niz = [
        '01.05.2023.' => 19,
        '02.05.2023.' => 22,
        '03.05.2023.' => 18,
        '04.05.2023.' => 15,
        '05.05.2023.' => 15
    ];

    echo najnizaTemp($niz);
    echo "<hr>"; 

?>