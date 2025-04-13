<?php
$people = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

// a) by value ascending
$keys = array_keys($people);
$values = array_values($people);

for ($i = 0; $i < count($values) - 1; $i++) {
    for ($j = $i + 1; $j < count($values); $j++) {
        if ($values[$i] > $values[$j]) {
            $tmp = $values[$i];
            $values[$i] = $values[$j];
            $values[$j] = $tmp;

            $tmpKey = $keys[$i];
            $keys[$i] = $keys[$j];
            $keys[$j] = $tmpKey;
        }
    }
}

echo "a) Ascending by value:\n";
for ($i = 0; $i < count($keys); $i++) {
    echo $keys[$i] . " => " . $values[$i] . "\n";
}

?>
