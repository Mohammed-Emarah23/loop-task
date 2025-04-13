<?php
$num = 12345;
$digits = [];
$temp = $num;

// Convert number to array
while ($temp > 0) {
    $digits[] = $temp % 10;
    $temp = (int)($temp / 10);
}
$digits = array_reverse($digits);

// Swap
$n = count($digits);
$tmp = $digits[0];
$digits[0] = $digits[$n - 1];
$digits[$n - 1] = $tmp;

// Convert array back to number
$swappedNum = 0;
for ($i = 0; $i < $n; $i++) {
    $swappedNum = $swappedNum * 10 + $digits[$i];
}

echo "Swapped: $swappedNum";
?>
