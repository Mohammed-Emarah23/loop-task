<?php
$array = array(1, 2, 3, 4, 5);
$insert = '$';
$position = 3;

for ($i = count($array); $i > $position; $i--) {
    $array[$i] = $array[$i - 1];
}
$array[$position] = $insert;

for ($i = 0; $i < count($array); $i++) {
    echo $array[$i] . " ";
}
?>
