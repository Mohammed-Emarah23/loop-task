<?php
$str = "the quick brown fox jumps over the lazy dog";
$newStr = "";
$found = false;
for ($i = 0; $i < strlen($str);) {
    if (!$found && $str[$i] == 't' && $str[$i+1] == 'h' && $str[$i+2] == 'e' &&
        ($i == 0 || $str[$i-1] == ' ') &&
        ($i+3 == strlen($str) || $str[$i+3] == ' ')) {

        $newStr .= "best";
        $i += 3;
        $found = true;
    } else {
        $newStr .= $str[$i];
        $i++;
    }
}
echo $newStr;
?>
