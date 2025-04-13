<?php
$x = array(1, 2, 3, 4, 5);

echo "Before:\n";
for ($i = 0; $i < count($x); $i++) {
    echo "[" . $i . "]=> int(" . $x[$i] . ")\n";
}

$removeIndex = 3;
for ($i = $removeIndex; $i < count($x) - 1; $i++) {
    $x[$i] = $x[$i + 1];
}
unset($x[count($x) - 1]);

$normalized = array();
for ($i = 0; $i < count($x); $i++) {
    $normalized[$i] = $x[$i];
}

echo "After:\n";
for ($i = 0; $i < count($normalized); $i++) {
    echo "[" . $i . "]=> int(" . $normalized[$i] . ")\n";
}
?>
