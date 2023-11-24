<?php

namespace task_one;

$array = include_once 'Array.php';
require_once '../helpers/RearrangeArray.php';

$keys = array_keys($array[0]);

$newArray = \helpers\rearrangeArrayByKeys($array, $keys);

// Print the table header
echo "+-----------+-----------+-----------+-----------+\n";
foreach ($keys as $key) {
    printf("| %-10s", $key);
}
echo "|\n+-----------+-----------+-----------+-----------+\n";

// Print the table rows
foreach ($array as $element) {
    foreach ($keys as $key) {
        printf("| %-10s", $element[$key]);
    }
    echo "|\n";
}
echo "+-----------+-----------+-----------+-----------+";

