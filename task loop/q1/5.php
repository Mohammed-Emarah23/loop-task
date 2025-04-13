<?php
$str = "HelloWorld";
$length = 0;
while (isset($str[$length])) $length++;

$lastThree = "";
for ($i = $length - 3; $i < $length; $i++) {
    $lastThree .= $str[$i];
}
echo $lastThree;
?>
