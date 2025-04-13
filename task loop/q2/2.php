<?php
$ceu = array(
    "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
    "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris",
    "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
    "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
    "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
    "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
    "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest",
    "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw"
);

$capitals = array();
$countries = array();

foreach ($ceu as $country => $capital) {
    $capitals[] = $capital;
    $countries[] = $country;
}

// Sort capitals using simple bubble sort (without using sort())
for ($i = 0; $i < count($capitals) - 1; $i++) {
    for ($j = $i + 1; $j < count($capitals); $j++) {
        if ($capitals[$i] > $capitals[$j]) {
            $temp = $capitals[$i];
            $capitals[$i] = $capitals[$j];
            $capitals[$j] = $temp;

            $tempCountry = $countries[$i];
            $countries[$i] = $countries[$j];
            $countries[$j] = $tempCountry;
        }
    }
}

for ($k = 0; $k < count($capitals); $k++) {
    echo "The capital of " . $countries[$k] . " is " . $capitals[$k] . "\n";
}
?>
