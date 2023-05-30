<?php
    $ocene=[10, 10, 9, 10, 10, 10, 8, 9, 9, 9, 9, 10, 10, 10];

    //for($i=0; $i<count($ocene); $i++)
    /*$max=0;
    if($max<$t){
    $max=$t;}*/
    //$ukupno+=$ocene[$i];

    // 2) Napisati funkciju koja vraća prosečnu ocenu studenta.

    function prosek($ocene){
        $prosek=0;
        $zbir=0;
        for($i=0; $i<count($ocene); $i++){
            $zbir+=$ocene[$i];
        }
        $prosek=$zbir/count($ocene);

        return $prosek;
    }

    echo "Prosecna ocena studenta je " .prosek($ocene);
    echo "<hr>";

    // 3) Napisati funkciju koja vraća maksimalnu ocenu koju je student dobio u toku studija.

    function maxOcena($ocene){
        $max=0;
        for($i=0; $i<count($ocene); $i++){
            if($ocene[$i]>$max){
                $max=$ocene[$i];
            }
        }
        return $max;
    }

    echo "Maksimalna ocena studenta je " .maxOcena($ocene);
    echo "<hr>";

    // 4) Napisati funkciju koja vraća broj predmeta na kojima je dobio maksimalnu ocenu u toku studija.

    function brMaxOcena($ocene){
        $max=maxOcena($ocene);
        $brMax=0;
        for($i=0; $i<count($ocene); $i++){
            if($ocene[$i]==$max){
                $brMax++;
            }
        }
        return $brMax;
    }

    echo "Broj predmeta sa maksimalnom ocenom studenta je " .brMaxOcena($ocene);
    echo "<hr>";


    // 5) Student je kandidat za studenta generacije ako je na ispitima dobijao samo devetke i desetke, i pri tome broj desetki nije manji od broja devetki. Napisati funkciju koja vraća da li je student kandidat za studenta generacije ili ne.

    function studentGeneracije($ocene){
        $devetke=0;
        $desetke=0;
        for($i=0; $i<count($ocene); $i++){
            if($ocene[$i]<9){
                return false;
            }
            else
            {
                if($ocene[$i]==9){
                    $devetke++;
                }
                elseif($ocene[$i]==10){
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

    echo "Student je kandidat za studenta generacije " .(studentGeneracije($ocene)? " JESTE " : " NIJE ");
    echo "<hr>";


    // 6) Napisati funkciju koja vraća maksimalnu dužinu podniza u kojoj je dobijao maksimalnu ocenu (ova dužina može biti jednaka 1). 


    function maxDOcena($ocene){
        $br=0;
        $maxD=0;
        $maxO=maxOcena($ocene);
        for($i=0; $i<count($ocene); $i++){
            if($ocene[$i] == $maxO){
                    $br++;
                    if($br > $maxD){
                        $maxD = $br;
                }
            }
            else{
                $br=0;
            }
        }
        return $maxD;
    }

    echo "Najduzi niz max ocena je " .maxDOcena($ocene);
    echo "<hr>";


    
?>