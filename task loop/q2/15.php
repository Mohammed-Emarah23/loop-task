<?php
$original = array(10, 20, 30, 40);
$copy = array();

for ($i = 0; $i < count($original); $i++) {
    $copy[$i] = $original[$i];
}

print_r($copy);
?>
