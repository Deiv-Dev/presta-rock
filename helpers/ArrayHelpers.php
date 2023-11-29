<?php

namespace helpers;

class ArrayHelpers
{
    public function splitArrayIntoGroups(array $numbersToGroupEqually, int $numberOfGroups): array
    {
        if ($numberOfGroups > count($numbersToGroupEqually) || $numberOfGroups < 1) {
            throw new \InvalidArgumentException(
                'Groups cannot be less than 1 or more than ' . count($numbersToGroupEqually)
            );
        }

        rsort($numbersToGroupEqually);

        $groups = array_fill(0, $numberOfGroups, []);
        $sums = array_fill(0, $numberOfGroups, 0);

        return $this->findSmallestArray($groups, $sums, $numbersToGroupEqually, 0);
    }

    public function findSmallestArray(array $groups, array $sums, array $numbersToGroupEqually, int $indexOfNumber)
    {
        if ($indexOfNumber == count($numbersToGroupEqually)) {
            return $groups;
        }

        $minSumIndex = array_search(min($sums), $sums, true);
        $groups[$minSumIndex][] = $numbersToGroupEqually[$indexOfNumber];
        $sums[$minSumIndex] += $numbersToGroupEqually[$indexOfNumber];

        return $this->findSmallestArray($groups, $sums, $numbersToGroupEqually, $indexOfNumber + 1);
    }
}
