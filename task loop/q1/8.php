<?php
$num = "1,234,567";
$result = "";
for ($i = 0; $i < strlen($num); $i++) {
    if ($num[$i] != ',') {
        $result .= $num[$i];
    }
}
echo $result;
?>
