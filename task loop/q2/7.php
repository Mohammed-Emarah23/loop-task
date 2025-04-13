<?php
$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");
$result = array();

for ($i = 0; $i < count($array1); $i++) {
    $row = array();
    $row[] = $array2[$i];
    for ($j = 0; $j < count($array1[$i]); $j++) {
        $row[] = $array1[$i][$j];
    }
    $result[] = $row;
}

print_r($result);
?>
