<?php
    class Film{
        private $naslov;
        private $reziser;
        private $godinaIzdanja;
    
    public function stampaj()
    {
        //echo "<p>Film" .$this->$naslov . " je rezirao " .$this->$reziser . " godine: " .$this->$godinaIzdanja . "</p>";

        echo
        "
            <table>
                <tr>
                    <td>Naslov filma: </td>
                    <td>$this->naslov : </td>
                </tr>
                <tr>
                    <td>Ime rezisera: </td>
                    <td>$this->reziser</td>
                </tr>
                <tr>
                    <td>Godina izdanja: </td>
                    <td>$this->godinaIzdanja</td>
                </tr>
            </table>   
        ";
    }

    // Geteri

    public function getNaslov()
    {
        return $this->naslov;
    }

    public function getReziser()
    {
        return $this->reziser;
    }

    public function getGodinaIzdanja()
    {
        return $this->godinaIzdanja;
    }

    // Seteri

    public function setNaslov($n)
    {
        $this->naslov = $n;
    }

    public function setReziser($r)
    {
        $this->reziser = $r;
    }

    public function setGodinaIzdanja($gi)
    {
        if($gi>1800)
        {
            $this->godinaIzdanja = $gi;
        }
        elseif($gi<=1800)
        {
            $this->godinaIzdanja = 1800;
        }
    }

}

    $film1 = new Film();
    $film1->setnaslov("Munje");
    $film1->setreziser("Reziser 1");
    $film1->setGodinaIzdanja("1998");
    $film1->stampaj();

    $film2 = new Film();
    $film2->setnaslov("Pirati sa Kariba");
    $film2->setreziser("Reziser 2");
    $film2->setGodinaIzdanja("2012");
    $film2->stampaj();

    $film3 = new Film();
    $film3->setnaslov("Maratonci");
    $film3->setreziser("Reziser 3");
    $film3->setGodinaIzdanja("1769");
    $film3->stampaj();

?>