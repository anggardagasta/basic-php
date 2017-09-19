<?php

$number = 1345679;
$split = str_split($number);
$count = count($split);

foreach ($split as $key => $val) {
    echo $val;
    for ($i = $key; $i < $count -1 ; $i++) {
        echo "0";
    }
    echo "\n";
}
