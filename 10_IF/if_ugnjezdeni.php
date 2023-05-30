<?php 
$pol = 'z';
$godine = 24;


if($pol == 'm')
{
    if ($godine >= 18)
    {
        echo "<p>Musko, punoletno</p>";
    }
    else
    {
        echo "<p>Musko, maloletno</p>";
    }
}
else
{
    if ($godine >= 18)
    {
        echo "<p>Zensko, punoletno</p>";
        }
        else
        {
        echo "<p>Zesko, maloletno</p>";
    
    }
}

if ($pol == 'm' && $godine >= 18)
{
    echo "<p>Musko, punoletno</p>";
}
elseif ($pol == 'm' && $godine < 18)
{
    echo "<p>Musko, maloletno</p>";
}
elseif ($pol == 'z' && $godine < 18)
{
    echo "<p>Zensko, maloletno</p>";
}
else
{
    echo "<p>Zensko, punoletno</p>";
}



?>