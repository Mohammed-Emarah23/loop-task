<?php
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

echo "Lowercase:\n";
foreach ($Color as $k => $v) {
    $Color[$k] = strtolower($v);
}
print_r($Color);

echo "Uppercase:\n";
foreach ($Color as $k => $v) {
    $Color[$k] = strtoupper($v);
}
print_r($Color);
?>
