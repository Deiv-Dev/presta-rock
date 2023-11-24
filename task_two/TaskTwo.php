<?php

namespace task_two;

function splitIntoGroups(array $nums, int $numGroups): array
{
    // Check if the number of groups exceeds the length of the array
    if ($numGroups > count($nums)) {
        throw new \InvalidArgumentException('Groups cannot be less than 1 or more than 8.');
    }

    // Sort the array in descending order
    rsort($nums);

    // Initialize groups
    $groups = array_fill(0, $numGroups, []);

    // Iterate through the sorted array and distribute elements into groups
    foreach ($nums as $num) {
        // Find the group with the smallest sum
        $minSumGroupIndex = array_search(min(array_map('array_sum', $groups)), array_map('array_sum', $groups));

        // Add the element to the group with the smallest sum
        $groups[$minSumGroupIndex][] = $num;
    }

    return $groups;
}

function getGroupsResult(): array
{
    // Example usage with an arbitrary number of groups (e.g., 3 in this case)
    $numToGroup = [1, 2, 4, 7, 1, 6, 2, 8];
    $numGroups = 5;

    try {
        return splitIntoGroups($numToGroup, $numGroups);
    } catch (\InvalidArgumentException $e) {
        // Handle the exception if needed
        echo 'Error: ' . $e->getMessage();
        return [];
    }
}
