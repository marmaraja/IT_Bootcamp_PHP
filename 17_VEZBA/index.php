<?php
    $brojStrana=[500, 200, 330, 400, 120];
    $cena=[5000, 3500, 1200, 900, 600];

    //PROLAZAK
    //for($i=0; $i<count($brojStrana); $i++)
    //foreach($brojStrana as $brS)
    //$i=0; while($i<count($brojStrana){... $i++;})

    // Uzimanje vrednosti
    /*$brS=$brojStrana[0]; // vraca 500
    $brS2=$brojStrana[2];*/

    function maxProsek($brojStrana, $cena){
        $max=$cena[0]/$brojStrana[0];
        for($i=0; $i<count($brojStrana); $i++){
            $t=$cena[$i]/$brojStrana[$i];
            if($max<$t){
                $max=$t;
            }
        }
        return $max;
    }

    $brojStranaA=['knjiga1'=>500, 'knjiga2'=>200, 'knjiga3'=>330, 'knjiga4'=>400, 'knjiga5'=>120];
    $cena=['knjiga1'=>5000, 'knjiga2'=>3500, 'knjiga3'=>1200, 'knjiga4'=>900, 'knjiga5'=>600];

    //PROLAZAK
    /*foreach($brojStranaA as $k=>$v)
    */

    function maxProsekA($brojStranaA, $cena){
        $max=0;
        foreach($brojStranaA as $k=>$v){
            $t = $cena[$k]/$v;
            if($max<$t){
                $max=$t;
            }
        }
        return $max;
    }

    //niz nizova
    $nizKnjiga = [
        ['brojStrana'=>500, 'cena'=>5000],
        ['brojStrana'=>200, 'cena'=>3500],
        ['brojStrana'=>330, 'cena'=>1200],
        ['brojStrana'=>400, 'cena'=>900],
        ['brojStrana'=>120, 'cena'=>600]
    ];

    function maxProsekNizA($nizKnjiga){
        $max=0;
        for($i=0; $i<count($nizKnjiga); $i++){
            $t = $nizKnjiga[$i]['cena']/$nizKnjiga[$i]['brojStrana'];
            if($max<$t){
                $max=$t;
            }
        }
        return $max;
    }


    $dan = ['temperatura'=>[8, 5, 15, -2, 0]];
    for($i=0; $i<count($dan['temperatura']); $i++){
        $t=$dan['temperatura'][$i];
    }


    class Knjiga{
        public $brojStrana;
        public $cena;
    }

    $k1 = new Knjiga();
    $k1->brojStrana = 500;
    $k1->cena = 5000;

    $k2 = new Knjiga();
    $k2->brojStrana = 200;
    $k2->cena = 3500;

    $k3 = new Knjiga();
    $k3->brojStrana = 330;
    $k3->cena = 1200;

    $k4 = new Knjiga();
    $k4->brojStrana = 00;
    $k4->cena = 900;

    $k5 = new Knjiga();
    $k5->brojStrana = 120;
    $k5->cena = 600;


    $knjige = array($k1, $k2, $k3, $k4, $k5);

    function maxProsekNiz($knjige){
        $max = 0;
        foreach($knjige as $knjiga){
            $t = $knjiga->cena / $knjiga->brojStrana;
            if($max<$t){
                $max = $t;
            }
        }
        return $max;
    }

    function maxProsekNiz2($knjige){
        $max = 0;
        for($i=0; $i<count($knjige); $i++){
            $knjiga = $knjige[$i];
            $t = $knjiga->cena / $knjiga->brojStrana;
            if($max<$t){
                $max = $t;
            }

        }
        return $max;
    }

    
?>