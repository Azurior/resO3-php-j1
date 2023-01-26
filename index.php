<?php

/*
$nb = 42;
echo $nb . "</br>";

$str = '42';
echo $str . "</br>";

$nbstr = $nb;
echo $nbstr . "</br>";
echo "\n";
$nb_tab = array (42, 8654, 34232.324234);
print_r($nb_tab);
echo  "</br>";

$nb_stars = [4353,23423,5654.3];
print_r($nb_stars);
echo  "</br>";

$str_tab = array("test", "test1", "test2");
print_r($str_tab);
echo  "</br>";

$animal = [
    "species" => "batard",
    "name" => "Nocturne",
    "age" => "6 mois"
    ];
print_r($animal);
echo  "</br>";

$data = 42;
$float = (float) $data;
$str = (string) $float;
echo $data . "</br>";
echo $float . "</br>";
echo $str;
*/

$animals = ["Chat", "Chien", "Lapin", "Souris"];
for($i = 0; $i < count($animals); $i++)
{
    echo "$animals[$i] </br>";
}

$numbers = [28, 32, 44, -67, 18, 24, -98];

foreach($numbers as $key => $negatif)
{
    if($key %2 === 0)
    {
        echo "";
    }
    else
    {
        echo "$negatif </br>";
    }
    
    
}

?>