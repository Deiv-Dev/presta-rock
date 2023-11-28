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

        foreach ($numbersToGroupEqually as $numbers) {
            $minSumIndex = array_search(min($sums), $sums);

            $groups[$minSumIndex][] = $numbers;
            $sums[$minSumIndex] += $numbers;
        }
        return $groups;
    }
}
