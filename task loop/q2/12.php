<?php
$arr = array(" ph p ", " la ra vel ", " sym fo ny ");

for ($i = 0; $i < count($arr); $i++) {
    $arr[$i] = str_replace(" ", "", $arr[$i]);
}

print_r($arr);
?>
