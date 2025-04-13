<?php
$sentence = "Hello world from PHP";
$firstWord = "";
for ($i = 0; $i < strlen($sentence); $i++) {
    if ($sentence[$i] == ' ') break;
    $firstWord .= $sentence[$i];
}
echo "First word: $firstWord";
?>
