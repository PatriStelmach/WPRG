<?php
echo "Podaj wartość N: ";
$n = (int)fgets(STDIN);

$fibonacci = array();

for ($i = 0; $i < $n; $i++)
{
    if ($i == 0 || $i == 1)
    {
        $fibonacci[$i] = $i;
    }
    else
    {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
}

foreach ($fibonacci as $key => $liczba)
{
    if ($liczba % 2 != 0)
    {
        echo  "". ($key + 1) . ": $liczba\n";
    }
}
?>
