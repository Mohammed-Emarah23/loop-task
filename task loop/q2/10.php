<?php
$arr = array("  php  ", " laravel ", "  symfony ");

array_walk($arr, function (&$item) {
    $item = trim($item);
});

print_r($arr);
?>
