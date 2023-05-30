<?php

$student = [
    ['ispit'=>"Analiza", 'datum'=>"2020/02/06", 'ocena'=>7],
    ['ispit'=>"Programiranje", 'datum'=>"2020/06/13", 'ocena'=>6],
    ['ispit'=>"Algebra", 'datum'=>"2021/01/30", 'ocena'=>10],
    ['ispit'=>"Strukture podataka", 'datum'=>"2019/12/14", 'ocena'=>10],
    ['ispit'=>"Web", 'datum'=>"2021/11/20", 'ocena'=>9],
    ['ispit'=>"Engleski", 'datum'=>"2020/10/09", 'ocena'=>8],
    ['ispit'=>"Baze podataka", 'datum'=>"2021/11/15", 'ocena'=>9]
];

    // 3) Napisati funkciju koja vraća maksimalnu ocenu koju je student dobio u toku studija.
    function maxOcena($student){
        $max=0;
        foreach($student as $ispit){
            if($ispit["ocena"]>$max){
                $max=$ispit['ocena'];
            }
        }
        return $max;
    }

    echo "Maksimalna ocena je : " .maxOcena($student);
    echo "<hr>";

    // 5) Student je kandidat za studenta generacije ako je na ispitima dobijao samo devetke i desetke, i pri tome broj desetki nije manji od broja devetki. Napisati funkciju koja vraća da li je student kandidat za studenta generacije ili ne.

    function studentGeneracije($student){
        $devetke=0;
        $desetke=0;
        foreach($student as $ispit)
        {
            if($ispit["ocena"]<9){
                return false;
            }
            else
            {
                if($ispit["ocena"]==9){
                   $devetke++;
                    }
                    elseif($ispit["ocena"]==10){
                    $desetke++;
                }
            }
    
        }
        if($desetke>=$devetke){
            return true;
        }
        else{
            return false;
        }
    }

    echo "Student je kandidat za studenta generacije " .(studentGeneracije($student)? " JESTE " : " NIJE ");
    echo "<hr>";


    // 8)Napisati funkciju kojoj se prosleđuje i godina kao dodatni parametar, a koja ispisuje predmete koje je polagao date godine.
    function polagao($student, $godina){
        foreach($student as $ispit){
            $predmet = $ispit['ispit'];
            $datum = $ispit['datum'];

            $d = date('yy', strtotime($datum));
            if($d == $godina){
                echo $predmet;
                echo " ";
            }
        }
    }
    $godina = 2020;

    echo "Predmeti polagani $godina godine su: ";
    polagao($student, $godina);
    echo "<hr>";

    // * //9) Napisati funkciju kojoj se prosleđuje i godina kao dodatni parametar, a koja vraća prosečnu ocenu studenta na ispitima koje je polagao date godine.

    function prosecnaOcena($student, $godina){
        $prosek = 0;
        $suma = 0;
        $br=0;
        foreach($student as $ispit)
        {
            $predmet = $ispit['ispit'];
            $datum = $ispit['datum'];
            $ocena = $ispit['ocena'];

            $d = date('yy', strtotime($datum));
        
            if($d == $godina){
                $suma+=$ocena;
                $br++;

            }
        }
        if($br == 0)
        {
            return false;
        }

        echo "$suma $ocena $br $d $godina";
        return $suma/$prosek;
    }

    $godina = 2021;

    echo "Prosecna ocena studenta $godina godine je: " .prosecnaOcena($student, $godina);
    echo "<hr>";

    // 10) Napisati funkciju koja vraća naziv predmeta na kojem je student dobio maksimalnu ocenu. Ukoliko ima više ovakvih predmeta, vratiti onaj koji je najskorije položio.


    //*//
    function najskorijePolozio($student){
        $maxOcena = maxOcena($student);
        $maxTime = 0;
        $rezultat = "";
        foreach($student as $ispit){
            $predmet = $ispit['ispit'];
            $datum = $ispit['datum'];
            $ocena = $ispit['ocena'];
            $d = date('yy', strtotime($datum));
            if($ispit['ocena'] == $maxOcena && $d<=$maxTime){
                $maxTime = $d;
                $rezultat = $ispit['ispit'];
            }
        }
        return $rezultat;
    }


    echo "Predmet: " .najskorijePolozio($student);
    echo "<hr>";

?>