<?php
$keys = array('x', 'y', 'y');
$values = array(10, 20, 30);

$result = array();

for ($i = 0; $i < count($keys); $i++) {
    $result[$keys[$i]] = $values[$i];
}

print_r($result);
?>
