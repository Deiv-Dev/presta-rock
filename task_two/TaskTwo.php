<?php

namespace task_two;

require_once '../helpers/ArrayHelpers.php';
use helpers\ArrayHelpers;

class SplitArrayIntoEqualGroups
{
    private array $numbersToGroupEqually;
    private int $numbersOfGroups;

    private ArrayHelpers $arrayHelpers;

    public function __construct(array $numbersToGroupEqually, int $numbersOfGroups, ArrayHelpers $arrayHelpers)
    {
        $this->numbersToGroupEqually = $numbersToGroupEqually;
        $this->numbersOfGroups = $numbersOfGroups;
        $this->arrayHelpers = $arrayHelpers;
    }

    public function getGroupsResult(): array
    {
        try {
            return $this->arrayHelpers->splitArrayIntoGroups($this->numbersToGroupEqually, $this->numbersOfGroups);
        } catch (\InvalidArgumentException $e) {
            echo 'Error: ' . $e->getMessage();
            return [];
        }
    }
}

$numbersOfGroups = 3;
$numbersToGroupEqually = [1, 2, 4, 7, 1, 6, 2, 8];
$arrayHelpers = new ArrayHelpers();

$splitArrayIntoEqualGroups = new SplitArrayIntoEqualGroups($numbersToGroupEqually, $numbersOfGroups, $arrayHelpers);
$result = $splitArrayIntoEqualGroups->getGroupsResult();

