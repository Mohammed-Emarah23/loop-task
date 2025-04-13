<?php
$str = "hello world";
$upper = "";

for ($i = 0; $i < strlen($str); $i++) {
    $char = $str[$i];
    $ascii = ord($char);
    if ($ascii >= 97 && $ascii <= 122) { // a-z
        $upper .= chr($ascii - 32);
    } else {
        $upper .= $char;
    }
}
echo $upper;
?>
