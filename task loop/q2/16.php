<?php
$array1 = array(1, 2, 3);
$array2 = array(4, 5, 6);
$merged = array();

for ($i = 0; $i < count($array1); $i++) {
    $merged[] = $array1[$i];
}

for ($i = 0; $i < count($array2); $i++) {
    $merged[] = $array2[$i];
}

print_r($merged);
?>
