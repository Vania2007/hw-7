<?php
$films = ["Oppenheimer" => ["Christopher Nolan", 2023],
    "Fast X" => ["Louis Leterrier", 2023],
    "The Hunger Games" => ["Gary Ross", 2012],
    "The Terminator" => ["James Cameron", 1984],
    "Top Gun: Maverick" => ["Joseph Kosinski", 2022],
];
echo "По назві \n";
ksort($films);
foreach ($films as $name => $film) {
    echo "\"$name\": $film[0], $film[1]\n";
}
function author($a, $b)
{
    if ($a[0] < $b[0]) {
        return -1;
    } elseif ($a[0] == $b[0]) {
        return 0;
    } else {
        return 1;
    }

}
echo "\nПо автору: \n";
uasort($films, "author");
foreach ($films as $name => $film) {
    echo "\"$name\": $film[0], $film[1]\n";
}
function year($a, $b)
{
    if ($a[1] < $b[1]) {
        return -1;
    } elseif ($a[1] == $b[1]) {
        return 0;
    } else {
        return 1;
    }

}
echo "\nПо року: \n";
uasort($films, "year");
foreach ($films as $name => $film) {
    echo "\"$name\": $film[0], $film[1]\n";
}
