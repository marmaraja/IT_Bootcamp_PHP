<?php
    class Pacijent{
        private $ime;
        private $visina;
        private $tezina;

        public function stampaj(){
            echo "<p>Pacijent $this->ime je visok $this->visina cm i tezak $this->tezina kilograma.<p>";
            echo "<p>BMI je " .$this->bmi()."</p>";
            echo "<p>Ovaj pacijent " .($this->kritican()?"JESTE":"NIJE"). " kritican</p>";
        }

        public function bmi(){
            $bmi=0;
            $tezina=$this->tezina;
            $visina=$this->visina;

            $bmi=($tezina/($visina*$visina))*10000;

            return $bmi;

        }

        public function kritican(){
            $bmi=$this->bmi();
            if($bmi<15 || $bmi>40){
                return true;
            }
            else{
                return false;
            }
        }

        public function getIme()
        {
            return $this->ime;
        }
    
        public function getVisina()
        {
            return $this->visina;
        }

        public function getTezina()
        {
            return $this->tezina;
        }
    

        public function setIme($i)
        {
            $this->ime = $i;
        }

        public function setVisina($v)
        {
            if($v>0 && $v<250)
            {
                $this->visina = $v;
            }
            else
            {
                return false;
            }
        }

        public function setTezina($t)
        {
            if($t>0 && $t<550)
            {
                $this->tezina = $t;
            }
            else
            {
                return false;
            }
        }
    
    }

    $pacijent1 = new Pacijent;
    $pacijent1->setIme("Petar");
    $pacijent1->setVisina("183");
    $pacijent1->settezina("-97");
    $pacijent1->stampaj();
    $pacijent1->bmi();
    $pacijent1->kritican();

    $pacijent2 = new Pacijent;
    $pacijent2->setIme("Janko");
    $pacijent2->setVisina("162");
    $pacijent2->setTezina("560");
    $pacijent2->stampaj();
    $pacijent2->bmi();
    $pacijent2->kritican();

    $pacijent3 = new Pacijent;
    $pacijent3->setIme("Ivana");
    $pacijent3->setVisina("172");
    $pacijent3->setTezina("42");
    $pacijent3->stampaj();
    $pacijent3->bmi();
    $pacijent3->kritican();


    
?>