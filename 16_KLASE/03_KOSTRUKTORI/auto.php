<?php

    class Auto
    {
        //polja
        private $marka;
        private $boja;
        private $imaKrov;

        //metode

        // KONSTRUKTOR

        public function __construct($m, $b, $ik)
        {
            $this->setMarka($m);
            $this->setBoja($b);
            $this->setImaKrov($ik);
        }

        // GETERI: vracaju vrednost polja

        public function getMarka()
        {
            return $this->marka;
        }

        public function getBoja()
        {
            return $this->boja;
        }

        public function getImaKrov()
        {
            return $this->imaKrov;
        }

        // SETERI: postavljaju vrednosti polja

        public function setMarka($m)
        {
            if($m != "")
            {
                $this->marka = $m;
            }
            else
            {
                $this->marka = "Fiat";
            }

        }

        public function setBoja($b)
        {
            $this->boja = $b;
        }

        public function setImaKrov($ik)
        {
            if($ik === true || $ik === false)
            {
                $this->imaKrov = $ik;
            }
            else
            {
                $this->imaKrov = false;
            }
        }
 
        
        
        private function sviraj()
        {
            echo "<p>Beep! Beep!</p>";
        }

        public function ispis()
        {
            echo "<p>Automobil marke $this->marka  boje  $this->boja";
            if($this->imaKrov == true)
            { 
                echo " ima krov ";
            }
            else
            {
                echo " nema krov ";
            }
            echo "</p>";
        }
    }
 

    // 1) Kreiramo objekat
    $a1 = new Auto("BMW", "plava", false); // objekat klase auto
    
    // 2) Koristimo objekat
    $a1->ispis();



?>