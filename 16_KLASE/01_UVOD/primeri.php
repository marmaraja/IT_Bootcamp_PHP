<?php
    class Film{
        var $naslov;
        var $reziser;
        var $godinaIzdanja;
    
    function stampaj()
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
}

    $film1 = new Film();
    $film1->naslov = "Munje";
    $film1->reziser = "Reziser 1";
    $film1->godinaIzdanja = "1998";
    $film1->stampaj();

    $film2 = new Film();
    $film2->naslov = "Pirati sa Kariba";
    $film2->reziser = "Reziser 2";
    $film2->godinaIzdanja = "2012";
    $film2->stampaj();

    $film3 = new Film();
    $film3->naslov = "Maratonci";
    $film3->reziser = "Reziser 3";
    $film3->godinaIzdanja = "1969";
    $film3->stampaj();

?>