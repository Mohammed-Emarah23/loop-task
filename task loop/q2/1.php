<?php
$color = array('white', 'green', 'red');

for ($i = 0; $i < count($color); $i++) {
    echo $color[$i];
    if ($i < count($color) - 1) {
        echo ", ";
    }
}
echo ",\n";

echo $color[1] . "\n";
echo $color[2] . "\n";
echo $color[0] . "\n";
?>
