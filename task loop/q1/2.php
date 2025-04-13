<?php
$text = "techstudy";
$count = 0;
for ($i = 0; $i < strlen($text); $i++) {
    if ($text[$i] == 't') {
        $count++;
    }
}
echo "Number of 't' characters: $count";
?>
