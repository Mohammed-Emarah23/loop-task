<?php
$num = 12345;
$lastDigit = $num % 10;

$firstDigit = $num;
while ($firstDigit >= 10) {
    $firstDigit = (int)($firstDigit / 10);
}

echo "First: $firstDigit, Last: $lastDigit";
?>
