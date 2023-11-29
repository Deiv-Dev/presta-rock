<?php

namespace task_one;

class TablePrinter
{
    private array $array;

    public function __construct(array $array)
    {
        $this->array = $array;
    }

    private function calculateTableWidth(): int
    {
        $findLongestValue = [];

        foreach ($this->array as $subarray) {
            foreach ($subarray as $key => $value) {
                $findLongestValue[] = $key;
                $findLongestValue[] = $value;
            }
        }

        return max(array_map('strlen', array_unique($findLongestValue)));
    }

    public function printTable()
    {
        $keys = array_keys($this->array[0]);
        $tableWidth = $this->calculateTableWidth();
        $responsiveTableLines = str_repeat('+' . str_repeat('-', $tableWidth + 1), count($keys)) . "+\n";

        echo $responsiveTableLines;

        foreach ($keys as $key) {
            printf("| %-" . $tableWidth . "s", $key);
        }

        echo "|\n" . $responsiveTableLines;

        foreach ($this->array as $element) {
            foreach ($keys as $key) {
                printf("| %-" . $tableWidth . "s", $element[$key]);
            }
            echo "|\n";
        }

        echo $responsiveTableLines;
    }
}

$array = include_once './Array.php';
$tablePrinter = new TablePrinter($array);
$tablePrinter->printTable();
