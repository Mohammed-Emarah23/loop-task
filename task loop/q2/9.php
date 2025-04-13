<?php
$arr = array("abcd", "abc", "de", "hjjj", "g", "wer");

$min = strlen($arr[0]);
$max = strlen($arr[0]);

for ($i = 1; $i < count($arr); $i++) {
    $len = strlen($arr[$i]);
    if ($len < $min) {
        $min = $len;
    }
    if ($len > $max) {
        $max = $len;
    }
}

echo "The shortest array length is $min\n";
echo "The longest array length is $max\n";
?>
