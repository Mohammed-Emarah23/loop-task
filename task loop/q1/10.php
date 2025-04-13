<?php
$a = 'Burch Jr, Philip H., The American es';
$current = "";
$array = [];

for ($i = 0; $i < strlen($a); $i++) {
    if ($a[$i] == ',' && $a[$i+1] == ' ') {
        $array[] = $current;
        $current = "";
        $i++;
    } else {
        $current .= $a[$i];
    }
}
$array[] = $current;

print_r($array);
?>
