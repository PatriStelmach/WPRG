<?php
echo "podaj dowolny zakres liczb, a ja wypisze liczby pierwsze mieszczace sie w nim";
$liczba = (int)fgets(STDIN);

for ($i = 2; $i <= $liczba; $i++)
{
    $czy_pierwsza = true;
    for ($j = 2; $j <= sqrt($i); $j++)
    {
        if ($i % $j == 0)
        {
            $czy_pierwsza = false;
            break;
        }
    }
    if ($czy_pierwsza)
    {
        echo "$i\n";
    }
}

?>