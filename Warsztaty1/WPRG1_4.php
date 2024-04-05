<?php
$text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
$tablica = explode(" ", $text);

for ($i = 0; $i < count($tablica); $i++)
{
    if (preg_match('/[^\w\s]/', $tablica[$i]))
    {
        array_splice($tablica, $i, 1);
        $i--;
    }
}
$assoc_tablica = array();
$count = count($tablica);
for ($i = 0; $i < $count - 1; $i += 2)
{
    $assoc_tablica[$tablica[$i]] = $tablica[$i + 1];
}

foreach ($assoc_tablica as $key => $value)
{
    echo $key . ": " . $value . "\n";
}
?>
