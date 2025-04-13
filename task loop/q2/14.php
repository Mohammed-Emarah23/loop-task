<?php
$large = array(1, 2, 3, 4, 5, 6);
$small = array(2, 4);

$isSubset = true;

for ($i = 0; $i < count($small); $i++) {
    if (!in_array($small[$i], $large)) {
        $isSubset = false;
        break;
    }
}

if ($isSubset) {
    echo "Second array is a subset of the first array.";
} else {
    echo "Second array is NOT a subset of the first array.";
}
?>
