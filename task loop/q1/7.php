<?php
$str = "RemoveMeFromStartThisIsTheRest";
$newStr = "";
for ($i = 13; $i < strlen($str); $i++) {
    $newStr .= $str[$i];
}
echo $newStr;
?>
