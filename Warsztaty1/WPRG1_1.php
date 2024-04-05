<?php
$owoce[0] = array('p', 'o', 'm', 'a', 'r', 'a', 'n', 'c', 'z');
$owoce[1] = array('j', 'a', 'b', 'l', 'k', 'o');
$owoce[2] = array('b', 'a', 'n', 'a', 'n');
$owoce[3] = array('k', 'i', 'w', 'i');
$owoce[4] = array('a', 'r', 'b', 'u', 'z');

foreach ($owoce as $index => $owoc)
{
    $nr_owoca = $index +1;
    echo "Owoc nr $nr_owoca:\n";

    $dlugosc = count($owoc);
    for ($i = $dlugosc - 1; $i >= 0; $i--)
    {
        echo $owoc[$i];
    }
    echo "\n";

    $znaleziono_p = false;
    foreach ($owoc as $litera)
    {
        if ($litera === 'p')
        {
            $znaleziono_p = true;
            break;
        }
    }

    if ($znaleziono_p)
    {
        echo "Ten owoc zawiera literę 'p'\n\n";
    }
    else
    {
        echo "Ten owoc nie zawiera litery 'p'\n\n";
    }

}
?>
