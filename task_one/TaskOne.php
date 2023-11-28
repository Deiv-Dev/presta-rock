<?php

namespace task_one;

$array = include_once 'Array.php';
require_once '../helpers/ArrayHelpers.php';

class TablePrinter
{
    private array $array;

    public function __construct(array $array)
    {
        $this->array = $array;
    }

    public function printTable()
    {
        $keys = array_keys($this->array[0]);

        echo "+-----------+-----------+-----------+-----------+\n";
        foreach ($keys as $key) {
            printf("| %-10s", $key);
        }
        echo "|\n+-----------+-----------+-----------+-----------+\n";
        foreach ($this->array as $element) {
            foreach ($keys as $key) {
                printf("| %-10s", $element[$key]);
            }
            echo "|\n";
        }
        echo "+-----------+-----------+-----------+-----------+";
    }
}

$tablePrinter = new TablePrinter($array);
$tablePrinter->printTable();
