<?php
$students = [
    [
        "name" => "Joan",
        "surname" => "Joanson",
        "year" => 2005,
        "marks" => [
            "PHP" => 4,
            "JS" => 3,
            "HTML" => 5,
        ],
    ],
    [
        "name" => "Jack",
        "surname" => "Smith",
        "year" => 2003,
        "marks" => [
            "PHP" => 3,
            "JS" => 3,
            "HTML" => 4,
        ],
    ],
    [
        "name" => "Martin",
        "surname" => "Miller",
        "year" => 2004,
        "marks" => [
            "PHP" => 4,
            "JS" => 3,
            "HTML" => 5,
        ],
    ],
    [
        "name" => "Max",
        "surname" => "Lord",
        "year" => 2007,
        "marks" => [
            "PHP" => 2,
            "JS" => 3,
            "HTML" => 5,
        ],
    ],
    [
        "name" => "Angelina",
        "surname" => "Shevchenko",
        "year" => 2000,
        "marks" => [
            "PHP" => 4,
            "JS" => 5,
            "HTML" => 5,
        ],
    ],
    [
        "name" => "Anastasia",
        "surname" => "Kravchuck",
        "year" => 2009,
        "marks" => [
            "PHP" => 5,
            "JS" => 5,
            "HTML" => 5,
        ],
    ],
    [
        "name" => "Vladislav",
        "surname" => "Litvinov",
        "year" => 2007,
        "marks" => [
            "PHP" => 4,
            "JS" => 4,
            "HTML" => 3,
        ],
    ],
    [
        "name" => "Bogdan",
        "surname" => "Yakovlev",
        "year" => 2010,
        "marks" => [
            "PHP" => 4,
            "JS" => 4,
            "HTML" => 5,
        ],
    ],
];
function name($a, $b)
{
    if ($a["name"] < $b["name"]) {
        return -1;
    } elseif ($a["name"] == $b["name"]) {
        return 0;
    } else {
        return 1;
    }
}
echo "По імені \n";
uasort($students, "name");
print_r($students);

function surname($a, $b)
{
    if ($a["surname"] < $b["surname"]) {
        return -1;
    } elseif ($a["surname"] == $b["surname"]) {
        return 0;
    } else {
        return 1;
    }
}
echo "\nПо прізвищу \n";
uasort($students, "surname");
print_r($students);

function year($a, $b)
{
    if ($a["year"] < $b["year"]) {
        return -1;
    } elseif ($a["year"] == $b["year"]) {
        return 0;
    } else {
        return 1;
    }
}
echo "\nПо року народження \n";
uasort($students, "year");
print_r($students);
function mark($a, $b)
{
    if ($a["average_mark"] < $b["average_mark"]) {
        return -1;
    } elseif ($a["average_mark"] == $b["average_mark"]) {
        return 0;
    } else {
        return 1;
    }
}
echo "\nПо середньому балу \n";
for ($i = 0; $i < count($students); $i++) {
    $students[$i]["average_mark"] = round(array_sum($students[$i]["marks"]) / count($students[$i]["marks"]), 2);
}
uasort($students, "mark");
print_r($students);
