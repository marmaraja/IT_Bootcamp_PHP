<?php
    class Pacijent{
        var $ime;
        var $visina;
        var $tezina;

        function stampaj(){
            echo "<p>Pacijent $this->ime je visok $this->visina cm i tezak $this->tezina kilograma.<p>";
            echo "<p>BMI je " .$this->bmi()."</p>";
            echo "<p>Ovaj pacijent " .($this->kritican()?"JESTE":"NIJE"). " kritican</p>";
        }

        function bmi(){
            $bmi=0;
            $tezina=$this->tezina;
            $visina=$this->visina;

            $bmi=$tezina/($visina*$visina);

            return $bmi;

        }

        function kritican(){
            $bmi=$this->bmi();
            if($bmi<15 || $bmi>40){
                return true;
            }
            else{
                return false;
            }
        }
    }

    $pacijent1 = new Pacijent;
    $pacijent1->ime = "Petar";
    $pacijent1->visina = "1.83";
    $pacijent1->tezina = "97";
    $pacijent1->stampaj();
    $pacijent1->bmi();
    $pacijent1->kritican();

    $pacijent2 = new Pacijent;
    $pacijent2->ime = "Janko";
    $pacijent2->visina = "1.62";
    $pacijent2->tezina = "122";
    $pacijent2->stampaj();
    $pacijent2->bmi();
    $pacijent2->kritican();

    $pacijent3 = new Pacijent;
    $pacijent3->ime = "Ivana";
    $pacijent3->visina = "1.72";
    $pacijent3->tezina = "42";
    $pacijent3->stampaj();
    $pacijent3->bmi();
    $pacijent3->kritican();


    
?>