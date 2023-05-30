<?php

    // Zadatak 1:
    $i = 1;
    while ($i <= 20) {
        echo " $i ";
        $i++;
    }
    $i = 1;
    while ($i <= 20) {
        echo "<p>$i</p>";
        $i++;
    }

    // Zadatak 2:

    $i = 20;
    while ($i >= 1) {
        echo " $i ";
        $i--;
    }


    // Zadatak 4.
    // I nacin

    $n = 5;
    $i = 1;

    while ($i <= $n) {
        if ($i % 3 == 0) {
            echo "<p style='color:red;'>Hello $i</p>";
        }
        elseif ($i % 3 == 1) {
            echo "<p style='color:blue;'>Hello $i</p>";
        }
        else {
            echo "<p style='color:orange;'>Hello $i</p>";
        }
        $i++;
    }

    // II nacin

    $n = 7;
    $i = 1;

    while ($i <= $n) {
        if ($i % 3 == 0) {
            $boja = "purple";
        }
        elseif ($i % 3 == 1) {
            $boja = "lime";
        }
        else {
            $boja = "magenta";
        }
        echo "<p style='color:$boja;>Hello $i</p>";
        $i++;
    }

    // III nacin

    $n = 7;
    $i = 1;
    while($i <= $n) {
        $boja = "magenta";
        if ($i%3 == 0) {
            $boja = "purple";
        }
        elseif ($i%3 == 1){
            $boja = "lime";
        }
        echo "<p style='color:$boja;>Hello $i</p>";
        $i++;
    }



         // Zadatak 3:

         $i = 0;
         while ($i <= 20) {
            echo "<p>$i</p>";
            $i = $i + 2;
        }
    

        //Zadatak 5:

        $n = 4;
        $i = 1;
        $slika = '<img src="gasa_naslovna.jpg"/>';
        $okvir = " 'border: 2px solid red';";
        $okvir2 = " 'border: 2px solid blue';";
        while ($i <= $n) {
            if ($i % 2 == 0) {
                echo "<img src='gasa_naslovna.jpg' style =' $okvir' >";
            }
            elseif ($i % 2 == 1) {
               echo "<img src='gasa_naslovna.jpg' style ='$okvir2' >";
            }
            $i++;
        }

            // Bonus zadatak

            $i = 1;
            $n = 12;

            while ($i <= $n) {
                $r = rand(0, 255);
                $g = rand(0, 255);
                $b = rand(0, 255);

                $color = "rgb({$r},{$g},{$b})";
                echo "<p style='color:$color; '> Ljubislav </p>";
                $i++;
            }

            echo "<hr>";


            // Zadatak 6:

            $i = 1;
            $suma = 0;
            while($i <= 100) {
                $suma+=$i;
                $i++;
            }
            echo "<p>Suma brojeva od 1 do 100 je $suma </p>";
            echo "<hr>";

            // Zadatak 7:

            $i = 1;
            $n = 256;
            $suma = 0;

            while($i <= $n) {
                $suma+=$i;
                $i++;
            }
            echo "<p>Suma brojeva od 1 do $n je $suma </p>";
            echo "<hr>";

            // Zadatak 8:

            $n = 56;
            $nPom = $n;
            $m = 158;
            $suma = 0;

            while($n <= $m) {
                $suma+=$n;
                $n++;
            }
            echo "<p>Suma brojeva od $nPom do $m je $suma </p>";
            echo "<hr>";

            // Zadatak 9:

            
            $n = 5;
            $nPom = $n;
            $m = 19;
            $suma = 1;

            while($n <= $m) {
                $suma*=$n;
                $n++;
            }

            echo "<p>Proizvod brojeva od $nPom do $m je $suma </p>";
            echo "<hr>";

            // Zadatak 10:

            $n = 2;
            $m = 15;
            $sumKv = 0;
            $sumKub = 0;

            while($n <= $m){
                if ($n%2 == 0){
                    $kvadrat = $n * $n;
                    $sumKv += $kvadrat;
                }
                else {
                    $kub = $n * $n * $n;
                    $sumKub += $kub;
                }
                $n++;
            }

            echo "<p>Suma kvadrata parnih brojeva od 2 do 15 je $sumKv, a suma kubova neparnih je $sumKub</p>";

            // Zadatak 11:

            $br = 0;
            $k = 15;
            $i = 1;

            while($i <= $k) {
                if($k % $i == 0) {
                    $br++;
                }
                $i++;
            }
            echo "<p>$k je deljiv sa $br delilaca</p>";

            // Zadatak 12: //br je prost samo ako je deljiv sa 1 i sa samim sobom
            // * I nacin * 
            
            $br = 0; //sa koliko brojeva je deljiv unti broj
            $k = 13; //uneti broj
            $i = 1; //iterator koji pokusava da deli uneti br

            while($i <= $k) {
                if($k % $i == 0) {
                    $br++;
                }
                $i++;
            }
            if($br == 2) {
                echo "<p>Broj $k je prost</p>";
            }
            else {
                echo "<p>Broj $k nije prost</p>";
            }

            // * II nacin *

            $k = 7;
            $i = 2;
            $prost = true; //pretp da je br prost

            while($i < $k) { //while($i < $k/2) // while($i <= sqrt($k))
                if($k % $i == 0) {
                    $prost = false;
                    break;
                }
                $i++;
            }
            if($prost == true) { //if($prost)
                echo "<p>Broj $k je prost</p>";
            }
            else {
                echo "<p>Broj $k nije prost</p>";
            }



?>