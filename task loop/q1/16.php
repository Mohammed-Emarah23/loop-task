<?php
$octal = 17;
$decimal = 0;
$power = 0;
$temp = $octal;

// Convert octal to decimal
while ($temp > 0) {
    $digit = $temp % 10;
    $decimal += $digit * pow(8, $power);
    $power++;
    $temp = (int)($temp / 10);
}

// Convert decimal to binary
$binary = "";
if ($decimal == 0) {
    $binary = "0";
} else {
    while ($decimal > 0) {
        $binary = ($decimal % 2) . $binary;
        $decimal = (int)($decimal / 2);
    }
}

echo "Binary: $binary";
?>
