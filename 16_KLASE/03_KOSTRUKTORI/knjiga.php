<?php
    class Knjiga{
        private $naslov;
        private $autor;
        private $godIzdanja;
        private $brojStrana;
        private $cena;


        public function __construct($n, $a, $gi, $bs, $c)
        {
            $this->setNaslov($n);
            $this->setAutor($a);
            $this->setGodIzdanja($gi);
            $this->setBrojStrana($bs);
            $this->setCena($c);
        }

        public function getNaslov()
        {
            return $this->naslov;
        }

        public function getAutor()
        {
            return $this->autor;
        }

        public function getGodIzdanja()
        {
            return $this->godIzdanja;
        }

        public function getBrojStrana()
        {
            return $this->brojStrana;
        }
        public function getCena()
        {
            return $this->cena;
        }

        public function setNaslov($n)
        {
            $this->naslov = $n;
        }

        public function setAutor($a)
        {
            $this->autor = $a;
        }
        
        public function setGodIzdanja($gi)
        {
            $this->godIzdanja = $gi;
        }
        
        public function setBrojStrana($bs)
        {
            $this->brojStrana = $bs;
        }

        public function setCena($c)
        {
            $this->cena = $c;
        }

        public function obimna()
        {
            
            if($this->brojStrana>600)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function skupa()
        {
            if($this->cena>8000)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function dugackoime()
        {
            if(strlen($this->autor)>18)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function ispis()
        {
            echo "Knjiga $this->naslov, autora $this->autor, izdata $this->godIzdanja, ima $this->brojStrana i kosta $this->cena ";
            echo ($this->obimna()) ? " je obimna, " : " nije obimna, ";
            echo ($this->skupa()) ? " jeste skupa, " : " nije skupa, ";
            echo ($this->dugackoime()) ? " autor ima dugacko ime" : " autor nema dugacko ime";
        }

    }

    $k1 = new Knjiga("Budni u 5", "Robin Sharma", "2020", 289, 8653);
    $k1->ispis();

    

?>