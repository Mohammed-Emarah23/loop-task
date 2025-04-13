<?php
$arr = array(1, 2, 2, 3, 4, 4, 5);
$unique = array();

for ($i = 0; $i < count($arr); $i++) {
    $found = false;
    for ($j = 0; $j < count($unique); $j++) {
        if ($arr[$i] == $unique[$j]) {
            $found = true;
            break;
        }
    }
    if (!$found) {
        $unique[] = $arr[$i];
    }
}

print_r($unique);
?>
