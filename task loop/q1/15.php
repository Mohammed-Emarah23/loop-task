<?php
$num = 12321;
$original = $num;
$reverse = 0;

while ($num > 0) {
    $digit = $num % 10;
    $reverse = $reverse * 10 + $digit;
    $num = (int)($num / 10);
}

if ($original == $reverse) {
    echo "$original is a palindrome.";
} else {
    echo "$original is not a palindrome.";
}
?>
